var express = require("express");
var rootRoute = require('./root.js');
const bodyParser = require("body-parser");
var app = express();

// =================
// App configuration
// =================
app.set('view engine', 'ejs');
app.use(express.static(__dirname + '/public'));

app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(bodyParser.json());

// Routes
app.use(rootRoute);

app.listen(process.env.PORT || 3000, process.env.IP, function(){
	console.log("Server is running");
});