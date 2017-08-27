const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        // TODO: Implement me...
        let tasksPromise = [
            Task.find({status: "Open"}),
            Task.find({status: "In Progress"}),
            Task.find({status: "Finished"})
        ];
        Promise.all(tasksPromise).then(allTasks => {
            res.render('task/index', {
                'openTasks': allTasks[0],
                'inProgressTasks': allTasks[1],
                'finishedTasks': allTasks[2],
            });
        });
    },
    createGet: (req, res) => {
        // TODO: Implement me...

        res.render('task/create');
    },
    createPost: (req, res) => {
        // TODO: Implement me...

        taskArgs = req.body;
        if (!taskArgs.title || !taskArgs.status) {
            res.redirect('/');
            return;
        }

        Task.create(taskArgs).then(task => {
            res.redirect('/');
        })
    },
    editGet: (req, res) => {
        // TODO: Implement me...

        let id = req.params.id;

        Task.findById(id).then(task => {
            if (!task) {
                res.redirect('/');
                return;
            }
            res.render('task/edit', task)
        })
    },
    editPost: (req, res) => {
        // TODO: Implement me...

        let id = req.params.id;
        let taskBody = req.body;

        if (!taskBody) {
            res.redirect('/');
            return;
        }

        Task.findByIdAndUpdate(id, taskBody).then(task => {
            res.redirect('/');
        });
    }
};