// Function is called

/*
Obtain start and end of journey.

Get the calculated distance of journey.

How much fuel per mile?
*/

// calls the function and initiial parameters.
let x = totalCommute(startLocation, endLocation);

function totalCommute(startLocation, endLocation) {

    commutingMath.startLocation = commuting.startLocation;
    commutingMath.endLocation = commuting.endLocation;

    // gets the distance betweenn the start and end locations of journey.
    var totalDistance = myMap.miles;

    // gets cost per mile using travel method.
    // Cost per mile for each travel method.
    var carCostPerMile = 0;
    var busCostPerMile = 0;
    var trainCostPerMile = 0;

    var totalCost = 0;

    // gets total emmision of journey.
    var totalEmmision = 0;

  return startLocation, totalDistace, totalDistance, totalCost, totalEmmision;
};