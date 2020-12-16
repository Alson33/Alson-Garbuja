
 var x = document.getElementsByClassName('stepper-holder')[0];

 function loadSteppers(){
     let date = new Date(2018, 0, 1);
     let latestDate = new Date();

     var years = latestDate.getFullYear() - date.getFullYear() + 1;
     var yr = date.getFullYear();

     for(var i = 1; i <= years; i++){
        var stepper = document.createElement('div');
        var stepperConnector = document.createElement('div');

        stepperConnector.classList.add('stepper-connector');
        stepperConnector.classList.add('connector'+i);

        if(stepperConnector.classList.contains('connector1')){
            stepperConnector.classList.add('active-stepper-connector');
        }

        stepper.classList.add('stepper');
        stepper.classList.add(yr);
        stepper.classList.add(i);

        if(stepper.classList.contains('2018')){
            stepper.classList.add('active-stepper');
        }
        stepper.innerHTML = date.getFullYear() - 1 + i;

        x.appendChild(stepper);
        x.appendChild(stepperConnector);

        yr++;
     }
 }

 loadSteppers();

function activeStepper(className){ 
    var steppers = document.getElementsByClassName('stepper');
    var stepperConnector = document.getElementsByClassName('stepper-connector');

    for(var i = 0; i < steppers.length; i++){
        steppers[i].classList.remove('active-stepper');
    }

    for(var j = 0; j < stepperConnector.length; j++){
        stepperConnector[j].classList.remove('active-stepper-connector');
    }

    document.getElementsByClassName(className)[0].classList.add('active-stepper');
    document.getElementsByClassName('connector'+className)[0].classList.add('active-stepper-connector');
}

function displayProject(className) {
    // var projectDivs = document.getElementsByClassName('projects-holder');s
    var nowActiveDiv = document.getElementsByClassName('active-projects-holder')[0];
    var toActiveDiv = document.getElementsByClassName(className+'-projects')[0];

    nowActiveDiv.classList.remove('active-projects-holder');
    nowActiveDiv.classList.add('inactive-projects-holder');
    toActiveDiv.classList.add('active-projects-holder');
}

document.getElementsByClassName('1')[0].addEventListener(
    'click', function(){
        activeStepper('1');
        displayProject('2018')
    }
);

document.getElementsByClassName('2')[0].addEventListener(
    'click', function(){
        activeStepper('2');
        displayProject('2019');
    }
);

document.getElementsByClassName('3')[0].addEventListener(
    'click', function(){
        activeStepper('3');
        displayProject('2020');
    }
);