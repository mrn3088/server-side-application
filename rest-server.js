const PORT = 3001;

const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');
const cors = require('cors');

// Function to generate a UUID
function uuidv4() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}


// Create express app
const app = express();

// Use body-parser middleware to parse request bodies
app.use(bodyParser.json());

// Better set up CORS properly or not depending on security posture
app.use(cors({
    origin: '*'
}));

// Create connection pool to MySQL database
// note my non-standard port number and very poor user name and password choices here

const pool = mysql.createPool({
    host: '127.0.0.1',
    port: '/var/run/mysqld/mysqld.sock',
    user: 'root',
    password: 'Cse135monster%',
    database: 'collector'
});

// Enable "promise" for mysql2
const promisePool = pool.promise();

///////////////////////////
// static records routes //
///////////////////////////

app.get('/static', async (req, res) => {
    try {
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM StaticRecords');
        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});



app.get('/static/:id', async (req, res) => {
    try {
        id = req.params.id;
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM StaticRecords WHERE id = ?', [id]);

        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.get('/static/exists/:id', async (req, res) => {
    try {
        const id = req.params.id;
        const [rows, fields] = await promisePool.query('SELECT * FROM StaticRecords WHERE id = ?', [id]);
        if (rows.length > 0) {
            res.status(200).json({ exists: true });
        } else {
            res.status(200).json({ exists: false });
        }
    } catch (error) {
        res.status(500).send(error);
    }
});

app.post('/static', async (req, res) => {
    try {
        const { id, userAgent, language, cookieEnabled, jsEnabled, imageEnabled, cssEnabled, screenWidth, screenHeight, windowWidth, windowHeight, connectionType } = req.body;

        if (!id) {
            return res.status(400).send('Missing id');
        }

        const [result] = await promisePool.query('INSERT INTO StaticRecords (id, userAgent, language, cookieEnabled, jsEnabled, imageEnabled, cssEnabled, screenWidth, screenHeight, windowWidth, windowHeight, connectionType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [id, userAgent, language, cookieEnabled, jsEnabled, imageEnabled, cssEnabled, screenWidth, screenHeight, windowWidth, windowHeight, connectionType]);

        res.status(201).send(`StaticRecord added with ID: ${id}`);
    } catch (error) {
        res.status(500).send(error);
    }
});


app.post('/noscript', async (req, res) => {
    try {
        let serverGeneratedId = uuidv4();

        {
            jsEnabled = false;
            id = serverGeneratedId;
            userAgent = req.headers['user-agent'];
            language = req.headers['accept-language'];
            const [result] = await promisePool.query('INSERT INTO StaticRecords (id, userAgent, language, jsEnabled) VALUES (?, ?, ?, ?)', [id, userAgent, language, jsEnabled]);

        }

        {            
            id = serverGeneratedId;
            const [result] = await promisePool.query('INSERT INTO PerformanceRecords (id) VALUES (?)', [id]);
        }

        {
            userId = serverGeneratedId;
            sessionId = uuidv4();
            const [result] = await promisePool.query('INSERT INTO ActivityRecords (userId, sessionId) VALUES (?, ?)', [userId, sessionId]);

        }

        res.status(201).send(`<h1>Thanks for your feedback!</h1><p>Records added with ID: ${serverGeneratedId} (noscript)</p>`);
    } catch (error) {
        console.log(error);
        res.status(500).send(error);
    }
});


app.patch('/api/static/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    const fieldsToUpdate = ['userAgent', 'language', 'cookieEnabled', 'jsEnabled', 'imageEnabled', 'cssEnabled', 'screenWidth', 'screenHeight', 'windowWidth', 'windowHeight', 'connectionType'].filter(field => req.body.hasOwnProperty(field));
    const valuesToUpdate = fieldsToUpdate.map(field => req.body[field]);
    const sqlSetValues = fieldsToUpdate.map(field => `${field} = ?`).join(', ');

    try {
        const [result] = await promisePool.query(`UPDATE StaticRecords SET ${sqlSetValues} WHERE id = ?`, [...valuesToUpdate, id]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.put('/static/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    const { userAgent, language, cookieEnabled, jsEnabled, imageEnabled, cssEnabled, screenWidth, screenHeight, windowWidth, windowHeight, connectionType } = req.body;

    try {
        const [result] = await promisePool.query('UPDATE StaticRecords SET userAgent = ?, language = ?, cookieEnabled = ?, jsEnabled = ?, imageEnabled = ?, cssEnabled = ?, screenWidth = ?, screenHeight = ?, windowWidth = ?, windowHeight = ?, connectionType = ? WHERE id = ?', [userAgent, language, cookieEnabled, jsEnabled, imageEnabled, cssEnabled, screenWidth, screenHeight, windowWidth, windowHeight, connectionType, id]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.delete('/static/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    try {
        const [result] = await promisePool.query('DELETE FROM StaticRecords WHERE id = ?', [id]);

        // Send response
        res.status(200).send(true);

    } catch (error) {
        res.status(500).send(error);
    }

});

////////////////////////////////
// performance records routes //
////////////////////////////////


app.get('/performance', async (req, res) => {
    try {
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM PerformanceRecords');

        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.get('/performance/:id', async (req, res) => {
    try {
        id = req.params.id;
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM PerformanceRecords WHERE id = ?', [id]);

        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.get('/performance/exists/:id', async (req, res) => {
    try {
        const id = req.params.id;
        const [rows, fields] = await promisePool.query('SELECT * FROM PerformanceRecords WHERE id = ?', [id]);
        if (rows.length > 0) {
            res.status(200).json({ exists: true });
        } else {
            res.status(200).json({ exists: false });
        }
    } catch (error) {
        res.status(500).send(error);
    }
});


app.post('/performance', async (req, res) => {
    try {
        const { id, timingObject, pageStartLoad, pageEndLoad, totalLoadTime } = req.body;

        if (!id) {
            return res.status(400).send('Missing id');
        }

        const [result] = await promisePool.query('INSERT INTO PerformanceRecords (id, timingObject, pageStartLoad, pageEndLoad, totalLoadTime) VALUES (?, ?, ?, ?, ?)', [id, JSON.stringify(timingObject), pageStartLoad, pageEndLoad, totalLoadTime]);

        res.status(201).send(`PerformanceRecord added with ID: ${id}`);
    } catch (error) {
        res.status(500).send(error);
    }
});


app.patch('/performance/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    const fieldsToUpdate = ['timingObject', 'pageStartLoad', 'pageEndLoad', 'totalLoadTime'].filter(field => req.body.hasOwnProperty(field));
    const valuesToUpdate = fieldsToUpdate.map(field => field === 'timingObject' ? JSON.stringify(req.body[field]) : req.body[field]);
    const sqlSetValues = fieldsToUpdate.map(field => `${field} = ?`).join(', ');

    try {
        const [result] = await promisePool.query(`UPDATE PerformanceRecords SET ${sqlSetValues} WHERE id = ?`, [...valuesToUpdate, id]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.put('/performance/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    const { timingObject, pageStartLoad, pageEndLoad, totalLoadTime } = req.body;

    try {
        const [result] = await promisePool.query('UPDATE PerformanceRecords SET timingObject = ?, pageStartLoad = ?, pageEndLoad = ?, totalLoadTime = ? WHERE id = ?', [JSON.stringify(timingObject), pageStartLoad, pageEndLoad, totalLoadTime, id]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});


app.delete('/performance/:id', async (req, res) => {
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    try {
        const [result] = await promisePool.query('DELETE FROM PerformanceRecords WHERE id = ?', [id]);

        res.status(200).send(true);

    } catch (error) {
        res.status(500).send(error);
    }
});



///////////////////////////////
// activity records routes ////
///////////////////////////////


app.get('/activity', async (req, res) => {
    try {
        const [rows, fields] = await promisePool.query('SELECT * FROM ActivityRecords');
        res.json(rows);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.get('/activity/:userId', async (req, res) => {
    try {
        const userId = req.params.userId;
        const [rows, fields] = await promisePool.query('SELECT * FROM ActivityRecords WHERE userId = ?', [userId]);
        res.json(rows);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.get('/activity/exists/:id', async (req, res) => {
    try {
        const id = req.params.id;
        const [rows, fields] = await promisePool.query('SELECT * FROM ActivityRecords WHERE userId = ?', [id]);
        if (rows.length > 0) {
            res.status(200).json({ exists: true });
        } else {
            res.status(200).json({ exists: false });
        }
    } catch (error) {
        res.status(500).send(error);
    }
});


app.post('/activity', async (req, res) => {
    try {
        const { userId, sessionId, timeEntered, timeLeft, page, idleList, moveRecords, clickRecords, scrollRecords, keyRecords, error } = req.body;

        if (!userId) {
            return res.status(400).send('Missing userId');
        }

        const [result] = await promisePool.query('INSERT INTO ActivityRecords (userId, sessionId, timeEntered, timeLeft, page, idleList, moveRecords, clickRecords, scrollRecords, keyRecords, error) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [userId, sessionId, timeEntered, timeLeft, page, JSON.stringify(idleList), JSON.stringify(moveRecords), JSON.stringify(clickRecords), JSON.stringify(scrollRecords), JSON.stringify(keyRecords), error]);

        res.status(201).send(`ActivityRecord added with UserId: ${userId}`);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.patch('/activity/:userId', async (req, res) => {
    const userId = req.params.userId;

    if (!userId) {
        return res.status(400).send('Missing userId');
    }

    const fieldsToUpdate = ['sessionId', 'timeEntered', 'timeLeft', 'page', 'idleList', 'moveRecords', 'clickRecords', 'scrollRecords', 'keyRecords', 'error'].filter(field => req.body.hasOwnProperty(field));
    const valuesToUpdate = fieldsToUpdate.map(field => req.body[field]);
    const sqlSetValues = fieldsToUpdate.map(field => `${field} = ?`).join(', ');

    try {
        const [result] = await promisePool.query(`UPDATE ActivityRecords SET ${sqlSetValues} WHERE userId = ?`, [...valuesToUpdate, userId]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});

app.put('/activity/:userId', async (req, res) => {
    const userId = req.params.userId;

    if (!userId) {
        return res.status(400).send('Missing userId');
    }

    const { sessionId, timeEntered, timeLeft, page, idleList, moveRecords, clickRecords, scrollRecords, keyRecords, error } = req.body;

    try {
        const [result] = await promisePool.query('UPDATE ActivityRecords SET sessionId = ?, timeEntered = ?, timeLeft = ?, page = ?, idleList = ?, moveRecords = ?, clickRecords = ?, scrollRecords = ?, keyRecords = ?, error = ? WHERE userId = ?', [sessionId, timeEntered, timeLeft, page, JSON.stringify(idleList), JSON.stringify(moveRecords), JSON.stringify(clickRecords), JSON.stringify(scrollRecords), JSON.stringify(keyRecords), error, userId]);

        res.status(200).send(true);
    } catch (error) {
        res.status(500).send(error);
    }
});


app.delete('/activity/:userId', async (req, res) => {
    const userId = req.params.userId;

    if (!userId) {
        return res.status(400).send('Missing userId');
    }

    try {
        const [result] = await promisePool.query('DELETE FROM ActivityRecords WHERE userId = ?', [userId]);

        res.status(200).send(true);

    } catch (error) {
        res.status(500).send(error);
    }
});



// Start server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
