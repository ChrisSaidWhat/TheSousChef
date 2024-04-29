//  global variables
let ingredientCounter = 1;
let instructionCounter = 1;

//  functions
function addIngredient(inTemplate, inDestination) {
    let copy = inTemplate.content.cloneNode(true);

    let updateIdSpan = copy.querySelectorAll("span[id]");
    updateIdSpan.forEach(element => {
        element.id = element.id + ingredientCounter;
    });

    let updateIdInput = copy.querySelectorAll("input[id]");
    updateIdInput.forEach(element => {
        element.id = element.id + ingredientCounter;
    });

    let updateIdTextarea = copy.querySelectorAll("textarea[id]");
    updateIdTextarea.forEach(element => {
        element.id = element.id + ingredientCounter;
    });

    let updateDescribedBy = copy.querySelectorAll("input[aria-describedby]");
    updateDescribedBy.forEach(element => {
        element.setAttribute("aria-describedby", element.getAttribute("aria-describedby") + ingredientCounter);
    });

    let updateName = copy.querySelectorAll("input[name]");
    updateName.forEach(element => {
        element.setAttribute("name", element.getAttribute("name") + "[" + ingredientCounter + "]");
    });

    ingredientCounter++;
    inDestination.appendChild(copy);
}

function addInstruction(inTemplate, inDestination) {
    let copy = inTemplate.content.cloneNode(true);

    let updateIdSpan = copy.querySelectorAll("span[id]");
    updateIdSpan.forEach(element => {
        element.id = element.id + instructionCounter;
    });

    let updateIdInput = copy.querySelectorAll("input[id]");
    updateIdInput.forEach(element => {
        element.id = element.id + instructionCounter;
    });

    let updateIdTextarea = copy.querySelectorAll("textarea[id]");
    updateIdTextarea.forEach(element => {
        element.id = element.id + instructionCounter;
    });

    let updateDescribedBy = copy.querySelectorAll("input[aria-describedby]");
    updateDescribedBy.forEach(element => {
        element.setAttribute("aria-describedby", element.getAttribute("aria-describedby") + instructionCounter);
    });

    let updateName = copy.querySelectorAll("input[name]");
    updateName.forEach(element => {
        element.setAttribute("name", element.getAttribute("name") + "[" + instructionCounter + "]");
    });

    let updateTextAreaName = copy.querySelectorAll("textarea[name]");
    updateTextAreaName.forEach(element => {
        element.setAttribute("name", element.getAttribute("name") + "[" + instructionCounter + "]");
    });

    instructionCounter++;
    inDestination.appendChild(copy);
}

function buildArchiveComponent(inId1, inId2) {
    let recipeDetails1 = localStorage.getItem("pageDetails" + inId1);
    recipeDetails1 = JSON.parse(recipeDetails1);
    let recipeDetails2 = localStorage.getItem("pageDetails" + inId2);
    recipeDetails2 = JSON.parse(recipeDetails2);

    if(inId1 % 2 === 0) {
        let evenRow = document.querySelector("#leftTemplate");
        let rowCopy = evenRow.content.cloneNode(true);
        rowCopy.querySelector("#leftCard1Img").setAttribute("src", "uploadedImages/" + recipeDetails1['recipeImage']);
        rowCopy.querySelector("#leftCard1Img").setAttribute("alt", recipeDetails1['recipeTitle']);
        rowCopy.querySelector("#leftCard1Title").innerHTML = recipeDetails1['recipeTitle'];
        rowCopy.querySelector("#leftCard1Btn").setAttribute("onclick", "callDatabase(" + inId1 + ")");
        rowCopy.querySelector("#leftCard1Btn").innerHTML = recipeDetails1['recipeTitle'];

        rowCopy.querySelector("#leftCard2Img").setAttribute("src", "uploadedImages/" + recipeDetails2['recipeImage']);
        rowCopy.querySelector("#leftCard2Img").setAttribute("alt", recipeDetails2['recipeTitle']);
        rowCopy.querySelector("#leftCard2Title").innerHTML = recipeDetails2['recipeTitle'];
        rowCopy.querySelector("#leftCard2Btn").setAttribute("onclick", "callDatabase(" + inId2 + ")");
        rowCopy.querySelector("#leftCard2Btn").innerHTML = recipeDetails2['recipeTitle'];
        document.querySelector("#contentLocation").appendChild(rowCopy);
    }
    else {
        let oddRow = document.querySelector("#rightTemplate");
        let rowCopy = oddRow.content.cloneNode(true);
        rowCopy.querySelector("#rightCard1Img").setAttribute("src", "uploadedImages/" + recipeDetails1['recipeImage']);
        rowCopy.querySelector("#rightCard1Img").setAttribute("alt", recipeDetails1['recipeTitle']);
        rowCopy.querySelector("#rightCard1Title").innerHTML = recipeDetails1['recipeTitle'];
        rowCopy.querySelector("#rightCard1Btn").setAttribute("onclick", "callDatabase(" + inId1 + ")");
        rowCopy.querySelector("#rightCard1Btn").innerHTML = recipeDetails1['recipeTitle'];

        rowCopy.querySelector("#rightCard2Img").setAttribute("src", "uploadedImages/" + recipeDetails2['recipeImage']);
        rowCopy.querySelector("#rightCard2Img").setAttribute("alt", recipeDetails2['recipeTitle']);
        rowCopy.querySelector("#rightCard2Title").innerHTML = recipeDetails2['recipeTitle'];
        rowCopy.querySelector("#rightCard2Btn").setAttribute("onclick", "callDatabase(" + inId2 + ")");
        rowCopy.querySelector("#rightCard2Btn").innerHTML = recipeDetails2['recipeTitle'];
        document.querySelector("#contentLocation").appendChild(rowCopy);
    }


}

function clearPage() {
    if (ingredientCounter > 1 || instructionCounter > 1) {
        while (ingredientCounter > 1) {
            document.querySelector(".createdDynamicallyIngredient").remove();
            ingredientCounter--;
        }

        while (instructionCounter > 1) {
            document.querySelector(".createdDynamicallyInstruction").remove();
            instructionCounter--;
        }
    }

    ingredientCounter = 1;
    instructionCounter = 1;

    document.querySelector("#recipeTitle").style.backgroundColor = "#F8F9FA";
    document.querySelector("#recipeImg").style.backgroundColor = "#F8F9FA";
    document.querySelector("#servingSizeLabel").style.backgroundColor = "#F8F9FA";
    document.querySelector("#recipeTimeLabel").style.backgroundColor = "#F8F9FA";
    document.querySelector("#recipeDiffLabel").style.backgroundColor = "#F8F9FA";
    document.querySelector("#ingredientTitle0").style.backgroundColor = "#F8F9FA";
    document.querySelector("#ingredientQuantity0").style.backgroundColor = "#F8F9FA";
    document.querySelector("#instructionHeading0").style.backgroundColor = "#F8F9FA";
    document.querySelector("#instructionBody0").style.backgroundColor = "#F8F9FA";
    document.querySelector("#nameLabel").style.backgroundColor = "#F8F9FA";
    document.querySelector("#emailAddressLabel").style.backgroundColor = "#F8F9FA";
    document.querySelector("#additionalComments").style.backgroundColor = "#F8F9FA";

    document.querySelector("#errMsg").classList.remove("show");
    document.querySelector("#errMsg").classList.add("hidden");
}

function populateArchive(inDatabaseCall) {
    let ids = localStorage.getItem("ids");
    ids = JSON.parse(ids);

    let recipeIndex = [];
    for(let i = 0; i < ids.length; i++) {
        let temp = ids[i].pop();
        recipeIndex.push(temp);
    }

    for(let i = 0; i < recipeIndex.length; i++) {
        callDatabaseArchive(recipeIndex[i]);
    }

    buildArchiveComponent(recipeIndex[0], recipeIndex[1]);
    buildArchiveComponent(recipeIndex[2], recipeIndex[3]);

}

function populateRecipe() {
    let recipeId = new URLSearchParams(window.location.search);
    let inSpecificRecipe = recipeId.get("recipeId");
    let recipeDetails = localStorage.getItem("pageDetails" + inSpecificRecipe);
    recipeDetails = JSON.parse(recipeDetails);
    console.log(recipeDetails);

    //  recipe head population
    let headSection = document.querySelector("#firstRowTemplate");
    let headCopy = headSection.content.cloneNode(true);
    headCopy.querySelector("#recipeImage").setAttribute("src", "uploadedImages/" + recipeDetails['recipeImage']);
    headCopy.querySelector("#recipeImage").setAttribute("alt", recipeDetails['recipeTitle']);

    headCopy.querySelector("#recipeTitle").innerHTML = recipeDetails['recipeTitle'];

    if(recipeDetails['recipeServingSize'] === "half") {
        headCopy.querySelector("#halfServing").selected = true;
    }
    else if(recipeDetails['recipeServingSize'] === "single") {
        headCopy.querySelector("#singleServing").selected = true;
    }
    else if(recipeDetails['recipeServingSize'] === "double") {
        headCopy.querySelector("#doubleServing").selected = true;
    }
    else if(recipeDetails['recipeServingSize'] === "triple") {
        headCopy.querySelector("#tripleServing").selected = true;
    }

    headCopy.querySelector("#recipeTime").value = recipeDetails['recipeTime'];

    headCopy.querySelector("#recipeDifficulty").value = recipeDetails['recipeDifficulty'];

    document.querySelector("#contentLocation").appendChild(headCopy);

    //  recipe body population
    let bodySection = document.querySelector("#secondRowTemplate");
    let container = document.querySelector("#ingredientContainerTemplate");
    let ingredient = document.querySelector("#ingredientItemTemplate");
    let instruction = document.querySelector("#instructionItemTemplate");

    let bodyCopy = bodySection.content.cloneNode(true);
    let ingredientContainer1 = container.content.cloneNode(true);
    let ingredientContainer2 = container.content.cloneNode(true);
    let ingredientContainer3 = container.content.cloneNode(true);

    let ingredientTitles = recipeDetails['ingredientTitles'];
    let ingredientQuantities = recipeDetails['ingredientQuantities'];

    let counter = ingredientTitles.length;

    for(let i = 0; i < counter; i++) {
        let ingredientItem = ingredient.content.cloneNode(true);
        ingredientItem.querySelector("p").innerHTML = ingredientTitles[i];
        ingredientItem.querySelector("span").innerHTML = ingredientQuantities[i];
        if((i <= 4) || (i > 12 && i <= 16)) {
            ingredientContainer1.appendChild(ingredientItem);
        }
        else if((i > 4 && i <= 8) || (i > 16 && i <= 20)) {
            ingredientContainer2.appendChild(ingredientItem);
        }
        else if((i > 8 && i <= 12) || (i > 20 && i <= 24)) {
            ingredientContainer3.appendChild(ingredientItem);
        }
    }
    bodyCopy.querySelector("#ingredientLocation").appendChild(ingredientContainer1);
    bodyCopy.querySelector("#ingredientLocation").appendChild(ingredientContainer2);
    bodyCopy.querySelector("#ingredientLocation").appendChild(ingredientContainer3);

    let instructionHeadings = recipeDetails['instructionHeadings'];
    let instructionBodies = recipeDetails['instructionBodies'];

    counter = instructionHeadings.length;

    for(let i = 0; i < counter; i++) {
        let instructionItem = instruction.content.cloneNode(true);
        instructionItem.querySelector("li").innerHTML = instructionHeadings[i];
        instructionItem.querySelector("p").innerHTML = instructionBodies[i];
        bodyCopy.querySelector("#instructionLocation").appendChild(instructionItem);
    }

    document.querySelector("#contentLocation").appendChild(bodyCopy);
}

function updateIngredientQuantities() {
    let recipeId = new URLSearchParams(window.location.search);
    let inSpecificRecipe = recipeId.get("recipeId");
    let recipeDetails = localStorage.getItem("pageDetails" + inSpecificRecipe);
    recipeDetails = JSON.parse(recipeDetails);

    const ORIGINAL_QUANTITIES = recipeDetails['ingredientQuantities'];
    let quantityMultiplier = document.querySelector("#servingSize").value;
    let quantities = document.querySelectorAll(".badge");

    switch (quantityMultiplier) {
        case "half":
            const TIMES_HALF = 0.5;
            for(let i = 0; i < quantities.length; i++) {
                quantities[i].innerHTML = ORIGINAL_QUANTITIES[i];
                quantities[i].innerHTML = quantities[i].innerHTML * TIMES_HALF;
            }
            break;
        case "single":
            const TIMES_ONE = 1;
            for(let i = 0; i < quantities.length; i++) {
                quantities[i].innerHTML = ORIGINAL_QUANTITIES[i];
                quantities[i].innerHTML = quantities[i].innerHTML * TIMES_ONE;
            }
            break;
        case "double":
            const TIMES_TWO = 2;
            for(let i = 0; i < quantities.length; i++) {
                quantities[i].innerHTML = ORIGINAL_QUANTITIES[i];
                quantities[i].innerHTML = quantities[i].innerHTML * TIMES_TWO;
            }
            break;
        case "triple":
            const TIMES_THREE = 3;
            for(let i = 0; i < quantities.length; i++) {
                quantities[i].innerHTML = ORIGINAL_QUANTITIES[i];
                quantities[i].innerHTML = quantities[i].innerHTML * TIMES_THREE;
            }
            break;
        default:
            for(let i = 0; i < quantities.length; i++) {
                quantities[i].innerHTML = ORIGINAL_QUANTITIES[i];
            }
    }
}