const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
  res.send('Hello from Node.js running in Docker!');
});

app.listen(port, () => {
  console.log(`Node.js app is running on http://localhost:${port}`);
});