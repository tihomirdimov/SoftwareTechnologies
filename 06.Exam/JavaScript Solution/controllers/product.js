const Product = require('../models/Product');

module.exports = {
    index: (req, res) => {
        //TODO: Implement me ...

        Product.find().then(products => {
            res.render('product/index', {'entries': products});
        });
    },
    createGet: (req, res) => {
        //TODO: Implement me ...

        res.render('product/create');
    },
    createPost: (req, res) => {
        //TODO: Implement me ...

        productArgs = req.body;
        if (!productArgs.priority || !productArgs.name || !productArgs.quantity || !productArgs.status) {
            res.redirect('/');
            return;
        }

        Product.create(productArgs).then(product => {
            res.redirect('/');
        });
    },
    editGet: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;

        Product.findById(id).then(product => {
            if (!product) {
                res.redirect('/');
                return;
            }
            res.render('product/edit', product)
        });
    },
    editPost: (req, res) => {
        //TODO: Implement me ...

        let id = req.params.id;
        let productBody = req.body;

        if (!productBody) {
            res.redirect('/');
            return;
        }

        Product.findByIdAndUpdate(id, productBody).then(product => {
            res.redirect('/');
        });
    }
};