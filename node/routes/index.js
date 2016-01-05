var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('login');
});


router.post('/', function(req, res){
	var firstname = req.body.fname;
	var lastname = req.body.lname;
	var email = req.body.email;
	var location = req.body.location;
	var sports = req.body.sports;
	var music = req.body.music;
	var partying = req.body.partying;
	var cooking = req.body.cooking;
	var gaming = req.body.gaming;

	if (firstname.length != 0 && lastname.length !=0 && email.length !=0 && location.length !=0){
				res.render('info', {
	            data : {firstname, lastname, email, location, sports, music, partying, cooking, gaming}
	        });
	} else {
		res.redirect('/');
	}
});



module.exports = router;
