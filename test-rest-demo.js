const PORT = 3001;

const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');
const cors = require('cors');

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
    database: 'users'
});

// Enable "promise" for mysql2
const promisePool = pool.promise();

app.get('/api/static', async (req, res) => {
    try {
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM users');

        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.get('/api/static/:id', async (req, res) => {
    try {
        id = req.params.id;
        // Execute SQL query
        const [rows, fields] = await promisePool.query('SELECT * FROM users WHERE id = ?', [id]);

        // Send response
        res.json(rows);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.post('/api/static', async (req, res) => {
    try {
        const { name, email } = req.body;

        if (!name || !email) {
            return res.status(400).send('Missing name or email');
        }

        // ZOMG on the way to SQL INJECTION if you don't watch out!

        // Execute SQL query
        const [result] = await promisePool.query('INSERT INTO users (name, email) VALUES (?, ?)', [name, email]);

        // Send response
        res.status(201).send(`User added with ID: ${result.insertId}`);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
});

app.put('/api/static/:id', async (req, res) => {

    const id = req.params.id;
    const { name, email } = req.body;

    if (!id || !name || !email) {
        return res.status(400).send('Missing id, name, or email');
    }

    try {
        // Execute SQL query
        const [result] = await promisePool.query('UPDATE users SET name = ?, email = ? WHERE id = ?', [name, email, id]);

        // Send response
        res.status(200).send(true);
    } catch (error) {
        // Handle error
        res.status(500).send(error);
    }
})

app.delete('/api/static/:id', async (req, res) => {
    // delete the user with the given id from the mySQL database
    const id = req.params.id;

    if (!id) {
        return res.status(400).send('Missing id');
    }

    try {
        const [result] = await promisePool.query('DELETE FROM users WHERE id = ?', [id]);

        // Send response
        res.status(200).send(true);

    } catch(error) {
        res.status(500).send(error);
    }

});

// Start server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
