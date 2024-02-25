
let values = new Array(100);
let counter = values.length;
for(let i = 0; i < values.length; i++){
    values[i] = 0;
}
    

function calculateEnergyUse(){
    let anHourInMinutes = 60;
    let energy = parseInt((Math.random()*100000)/anHourInMinutes) + 1;
    console.log(energy);
    alert("Energy Captured!")
    values.push(energy);
    return energy;
}
        

$("#displayButton").click(
    listOutputs()
)

function listOutputs(){
    let goodValCount = 0;
    
    var values_html = "<ol>";
    for (var i=0; i < values.length; i++) {
        let value = values[i];
        if(value == 0 || value == "undefined"){
            values_html += "";
        } else {
            values_html += "<li>" + value + "J </li>";
            goodValCount++;
        }
    };
    values_html += "</ol>";
    $("#energyValues").html(values_html)
    return goodValCount;
}



