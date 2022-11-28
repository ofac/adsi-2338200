const express = require('express');
const router = express.Router();
const User = require('../models/Users');

// Get all users
router.get('/', async (req, res) => {
	const users = await User.find();

	res.json(users);
});

// Create new user
router.post('/new', async (req, res) => {
	const newUser = new User(req.body);
	
	const savedUser = await newUser.save();

	res.json(savedUser);
});

// Get specific user
router.get('/get/:id', async (req, res) => {
	const u = await User.findById({ _id: req.params.id });

	res.json(u);
});

// Delete a user
router.delete('/delete/:id', async (req, res) => {
	const result = await User.findByIdAndDelete({ _id: req.params.id });

	res.json(result);
});

// Update a user
router.patch('/update/:id', async (req, res) => {
	const u = await User.updateOne({_id: req.params.id}, {$set: req.body});

	res.json(u);
});

// Get random user
router.get('/random', async (req, res) => {
	const count = await User.countDocuments();
	const random = Math.floor(Math.random() * count);
	const u = await User.findOne().skip(random);

	res.json(u);
});

module.exports = router;