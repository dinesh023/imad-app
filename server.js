var express = require('express');
var morgan = require('morgan');
var path = require('path');
var Pool = require('pg').Pool;
var crypto = require('crypto');
var bodyParser = require('body-parser');
var session = require('express-session');

var config = {
    user: 'dineshdinesh023',
    database: 'dineshdinesh023',
    host: 'db.imad.hasura-app.io',
    port: '5432',
    password: 'db-dineshdinesh023-37304'
};

var app = express();
app.use(morgan('combined'));

app.get('/signup', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'dinesh.html'));
});

var counter=0;
app.get('/counter',function(req,res){
   counter=counter+1;
   res.send(counter.toString());
});
app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

app.get('/login/:username',function(req,res){
    var name1 =  req.params.username;
    res.send(name1.toString());
});
var pool = new Pool(config);
app.get('/signup/:num/:username/:password',function(req,res)
{   var username = req.params.username;
    var password = req.params.password;
    var num = req.params.num;
   
   if(num == 111){
       pool.query('INSERT INTO "login" values($s1,$s2,0)',[username,password],function(req,res){
          if(err)
          {
              res.send(404).send("NO DATA FOUND");
          }
          else
          {
              res.send("SUCCESS");
          }
       });
   }
});


app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});

app.get('/ui/images.jpg',function(req,res){
   res.sentfile(path.join(_dirname,'ui','images.jpeg')); 
});
// Do not change port, otherwise your app won't run on IMAD servers
// Use 8080 only for local development if you already have apache running on 80

var port = 80;
app.listen(port, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
