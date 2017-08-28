const mongoose = require('mongoose');

let filmSchema = mongoose.Schema({
    //TODO: Implement me ...

    name: {type: 'string', required: 'true'},
    genre: {type: 'string', required: 'true'},
    director: {type: 'string', required: 'true'},
    year: {type: 'number', required: 'true'},
});

let Film = mongoose.model('Film', filmSchema);

module.exports = Film;