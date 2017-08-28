const Film = require('../models/Film');

module.exports = {
	index: (req, res) => {
        //TODO: Implement me ...

        Film.find().then(films => {
            res.render('film/index', {'films': films});
        });	},
	createGet: (req, res) => {
        //TODO: Implement me ...

        res.render('film/create');
	},
	createPost: (req, res) => {
        //TODO: Implement me ...

        filmArgs = req.body;
        if (!filmArgs.name || !filmArgs.genre || !filmArgs.director || !filmArgs.year) {
            res.redirect('/');
            return;
        }

        Film.create(filmArgs).then(film => {
            res.redirect('/');
        })
	},
	editGet: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;

        Film.findById(id).then(film => {
            if (!film) {
                res.redirect('/');
                return;
            }
            res.render('film/edit', film)
        })
	},
	editPost: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;
        let filmBody = req.body;

        if (!filmBody) {
            res.redirect('/');
            return;
        }

        Film.findByIdAndUpdate(id, filmBody).then(film => {
            res.redirect('/');
        });
	},
	deleteGet: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;
        Film.findById(id).then(film => {
            if (!film) {
                res.redirect('/');
                return;
            }
            res.render('film/delete', film)
        })
	},
	deletePost: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;
        Film.findByIdAndRemove(id).then(film => {
            res.redirect('/');
        });
	}
};