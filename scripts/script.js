
 var x = document.getElementsByClassName('stepper-holder')[0];

 function loadSteppers(){
     let date = new Date(2018, 0, 1);
     let latestDate = new Date();

     var years = latestDate.getFullYear() - date.getFullYear() + 1;

     for(var i = 1; i <= years; i++){
        var stepper = document.createElement('div');
        stepper.classList.add('stepper');
        stepper.classList.add(i);

        if(stepper.classList.contains('1')){
            stepper.classList.add('active-stepper');
        }
        stepper.innerHTML = date.getFullYear() - 1 + i;

        x.appendChild(stepper);
     }
 }

 loadSteppers();

function activeStepper(className){ 
    var steppers = document.getElementsByClassName('stepper');

    for(var i = 0; i < steppers.length; i++){
        steppers[i].classList.remove('active-stepper');
    }

    document.getElementsByClassName(className)[0].classList.add('active-stepper');
}

document.getElementsByClassName('1')[0].addEventListener(
    'click', function(){
        activeStepper('1');
    }
);

document.getElementsByClassName('2')[0].addEventListener(
    'click', function(){
        activeStepper('2');
    }
);

document.getElementsByClassName('3')[0].addEventListener(
    'click', function(){
        activeStepper('3');
    }
);