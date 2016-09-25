var Sequelize = require('sequelize')
  , sequelize = new Sequelize('database_name', 'username', 'password', {
      dialect: "mysql",
      port:    3306,
    });

sequelize
  .authenticate()
  .then(function(err) {
    console.log('Connection has been established successfully.');
  }, function (err) {
    console.log('Unable to connect to the database:', err);
  });

var sequelize = new Sequelize('databaseinstance.cmpvv7vrynza.us-west-2.rds.amazonaws.com');
