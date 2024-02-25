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
    var carCostPerMile = 0.47;
    var busCostPerMile = 1.50;
    var trainCostPerMile = 0.55;

    // if statements to determine 1 method of travel.
    var selectedMethodCost = 0;
    if(commuting.methodOfTravel == "car"){
      selectedMethodCost = carCostPerMile;
    }
    if(commuting.methodOfTravel == "bus"){
      selectedMethodCost = busCostPerMile;
    }
    if(commuting.methodOfTravel == "train"){
      selectedMethodCost = trainCostPerMile;
    }

    // calculates the total cost of journey.
    var totalCost = selectedMethodCost * totalDistance;

    // code for energy emmision.
    var power = 4.1; // litre of fuel per mile
    var energyConsumption = power * totalDistance;

    var emmissionCoefficient = 0.5; // example

    // gets total emmision of journey.
    var totalEmmision = energyConsumption * emmissionCoefficient;;

  return startLocation, totalDistace, totalDistance, totalCost, totalEmmision;
};