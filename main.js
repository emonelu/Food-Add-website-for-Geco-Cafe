function myFunction(){
    document.getElementById("demo").innerHTML = ("Internal Java Script demo");



}
function toCelcius(fahrenheit){
    return (5/9)*(fahrenheit-32);


    document.getElementById(no2).innerHTML =(toCelcius(3) + " Degrees")

}

let dog ={ name: 'Spike', breed: 'dalmatian'}


const person = {
    name: ['Bob', 'Smith'],
    age: 32,
    gender: 'male',
    interests: ['music', 'skiing'],
    bio: function(){
        alert(this.name[0] + ' ' + this.name[1] + ' is ' +this.age + ' years old. He likes ')
    },
    greeting: function(){
        alert ('Hi! I\'m' + this.name[0] + '.');

    }
};