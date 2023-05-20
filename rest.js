const express = require('express');
const app = express();
app.use(express.json());

let data = []; // Temporary data storage. Replace this with your database.

app.get('/api/static', (req, res) => {
    res.send(data);
});

app.get('/api/static/:id', (req, res) => {
    const item = data.find(d => d.id === parseInt(req.params.id));
    if (!item) return res.status(404).send('The item with the given ID was not found.');
    res.send(item);
});

app.post('/api/static', (req, res) => {
    const item = {
        id: data.length + 1,
        name: req.body.name
    };
    data.push(item);
    res.send(item);
});

app.delete('/api/static/:id', (req, res) => {
    const item = data.find(d => d.id === parseInt(req.params.id));
    if (!item) return res.status(404).send('The item with the given ID was not found.');
    
    const index = data.indexOf(item);
    data.splice(index, 1);
    
    res.send(item);
});

app.put('/api/static/:id', (req, res) => {
    const item = data.find(d => d.id === parseInt(req.params.id));
    if (!item) return res.status(404).send('The item with the given ID was not found.');
    
    item.name = req.body.name;
    res.send(item);
});

const port = process.env.PORT || 3001;
app.listen(port, () => console.log(`Listening on port ${port}...`));
