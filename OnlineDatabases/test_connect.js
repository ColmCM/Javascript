//Server Connection Test

//CRUD:
//There	are	no requirements	to develop a HTML/CSS/JS “front-end” for this assignment. You only need	
//to develop the ”back end”	functionality that demonstrates	the	CRUD activity described	above using	
//randomly	created,or hard-coded, data in your back end solution.

//References:
/*
https://www.youtube.com/watch?v=s8YG0GvQInY
https://youtu.be/hq7gGo-1CgM
https://www.youtube.com/watch?v=mKHB500bsEI&feature=youtu.be
https://www.youtube.com/watch?v=Ec57uR2fzzo&feature=youtu.be
https://www.youtube.com/watch?v=qZEDFBBeZMA
*/
//I used Google Chrome & Windows


const MongoClient = require('mongodb').MongoClient;
const connect = require("./connect_atlas_dummy");
const assert = require('assert');


const dbName = 'Assignment5DB';

// Use connect method to connect to the server
MongoClient.connect(connect.database.url, { useUnifiedTopology: true }, function(err, client) {
    // Using the assert module for testing.
    assert.equal(null, err);
    console.log("Connected successfully to server");

    const db = client.db(dbName);

    //Create a User
    const User1 = 
    {
        id: 10,
        title: "",
        firstname: "John",
        lastname: "Doe",
        mobile: "1234567890",
        email: "john.doe@example.com",
        homeaddressline1: "123 Main St",
        homeaddressline2: "",
        hometown: "Anytown",
        homecitycounty: "County",
        homeeircode: "",
        shippingaddressline1: "456 Market St",
        shippingaddressline2: "",
        shippingtown: "Someplace",
        shippingcitycounty: "County",
        shippingeircode: "",
        phone: 
        {
            phonemanufacturer: "Apple",
            phonemodel: "iPhone X",
            phoneprice: "$999",
        },
        phone2: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone3: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone4: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone5: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone6: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone7: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone8: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone9: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },
        phone10: 
        {
            phonemanufacturer: "",
            phonemodel: "",
            phoneprice: "",
        },

        title : { type: String, required: true },
        firstname: { type: String, required: true },
        lastname: { type: String, required: true },
        mobile: { type: String, required: true },
        email: { type: String, required: true },
        homeaddressline1: { type: String, required: true },
        homeaddressline2: { type: String },
        hometown: { type: String, required: true},
        homecitycounty: { type: String, required: true },
        homeeircode: { type: String },
        shippingaddressline1: { type: String, required: true },
        shippingaddressline2: { type: String },
        shippingtown: { type: String, required: true },
        shippingcitycounty: { type: String, required: true },
        shippingeircode: { type: String },
        phone: {
            phonemanufacturer: { type: String, required: true },
            phonemodel: { type: String, required: true },
            phoneprice: { type: String, required: true }
        }
    };

    //Add the user  
    db.collection("Assignment5Collection").insertOne(User1, function(err, res) {
        if (err) {
            console.log(err);
            return;
        }
        console.log("User inserted successfully.");
    });

    // Find all users
    db.collection("Assignment5Collection").find({}).toArray(function(err, docs) {
        if (err) {
            console.log(err);
            return;
        }
        console.log("All users:");
        console.log(docs);
    });

    // Find and delete a user by id.
    db.collection("Assignment5Collection").findOneAndDelete({ id: 1 }, function(err, result) {
        if (err) {
            console.log(err);
            return;
        }
        console.log("User deleted successfully");
    });

    //Update a User
     
    const updateDoc = {
        $set: {

            title: "",
            firstname: "Dohn",
            lastname: "Joe",
            mobile: "1234562147890",
            email: "john312t3.doe@example.com",
            homeaddressline1: "Alabamat",
            homeaddressline2: "",
            hometown: "Rotterdam",
            homecitycounty: "Cegwj",
            homeeircode: "",
            shippingaddressline1: "Anywhere",
            shippingaddressline2: "",
            shippingtown: "Liverpool",
            shippingcitycounty: "Rome",
            shippingeircode: "",
            phone: 
            {
             phonemanufacturer: "Apple",
             phonemodel: "iPhone X",
             phoneprice: "$999",
            },
            phone2: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone3: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone4: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone5: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone6: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone7: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone8: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone9: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },
            phone10: 
            {
             phonemanufacturer: "",
             phonemodel: "",
             phoneprice: "",
            },

            firstname: { $exists: true, $ne: null },
            lastname: { $exists: true, $ne: null },
            mobile: { $exists: true, $ne: null },
            email: { $exists: true, $ne: null },
            homeaddressline1: { $exists: true, $ne: null },
            homecitycounty: { $exists: true, $ne: null },
            shippingaddressline1: { $exists: true, $ne: null },
            shippingtown: { $exists: true, $ne: null },
            shippingcitycounty: { $exists: true, $ne: null },
            "phone.phonemanufacturer": { $exists: true, $ne: null },
            "phone.phonemodel": { $exists: true, $ne: null },
            "phone.phoneprice": { $exists: true, $ne: null }

        }
    };
    //Updating by filtering by id
    db.collection("Assignment5Collection").findOneAndUpdate({id: 2}, updateDoc, function(err, res) {
        if (err) {
            console.log(err);
            return;
        }
        console.log("Update Successful")
    });

   
    
});
