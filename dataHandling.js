function callDatabase(inSpecificRecipe) {
    let callJSON = new XMLHttpRequest();
    callJSON.open("GET", "packageJSON.php?recipeId=" + inSpecificRecipe, true);
    callJSON.send();

    callJSON.onreadystatechange = function () {
        if (callJSON.readyState === 4 && callJSON.status === 200) {

            let pageDetails = JSON.parse(callJSON.responseText)

            localStorage.setItem("pageDetails" + inSpecificRecipe, JSON.stringify(pageDetails));

            window.location.assign("recipe.php?recipeId=" + inSpecificRecipe);
        }
    }
}

function callDatabaseArchive(inSpecificRecipe) {
    let callJSON = new XMLHttpRequest();
    callJSON.open("GET", "packageJSON.php?recipeId=" + inSpecificRecipe, true);
    callJSON.send();

    callJSON.onreadystatechange = function () {
        if (callJSON.readyState === 4 && callJSON.status === 200) {

            let pageDetails = JSON.parse(callJSON.responseText)

            localStorage.setItem("pageDetails" + inSpecificRecipe, JSON.stringify(pageDetails));
        }
    }
}

function compileRequestObject(ingredientCounter, instructionCounter) {
    let req = new Request();

    req.setRequestedRecipeTitle(document.querySelector("input[name='inRecipeTitle']").value);
    req.setRequestedRecipeImage(document.querySelector("input[name='inRecipeImage']").value);
    req.setRequestedRecipeServingSize(document.querySelector("#servingSize").value);
    req.setRequestedRecipeTime(document.querySelector("input[name='inRecipeTime']").value);
    req.setRequestedRecipeDifficulty(document.querySelector("input[name='inRecipeDifficulty']").value);

    for (let i = 0; i < ingredientCounter; i++) {
        req.addIngredientTitle(document.querySelector("#inIngredientTitle" + i).value);
        req.addIngredientQuantity(document.querySelector("#inIngredientQuantity" + i).value);
    }

    for (let i = 0; i < instructionCounter; i++) {
        req.addInstructionHeading(document.querySelector("#inInstructionHeading" + i).value);
        req.addInstructionBody(document.querySelector("#inInstructionBody" + i).value);
    }

    req.setRequestSenderName(document.querySelector("input[name='inSenderName']").value);
    req.setRequestSenderEmail(document.querySelector("input[name='inSenderEmail']").value);
    req.setRequestSenderComments(document.querySelector("#senderComments").value);

    const JSON_REQUEST = JSON.stringify(req);

    if (validateFields(ingredientCounter, instructionCounter)) {
        localStorage.setItem("request", JSON_REQUEST);
        document.querySelector("#formSubmit").submit();
    }
    else {
        document.querySelector("#errMsg").classList.remove("hidden");
        document.querySelector("#errMsg").classList.add("show");
    }


}

function databasePreCheck(ingredientCounter, instructionCounter) {
    if (validateFields(ingredientCounter, instructionCounter)) {
        document.querySelector("#formSubmit").submit();
    }
    else {
        document.querySelector("#errMsg").classList.remove("hidden");
        document.querySelector("#errMsg").classList.add("show");
    }
}

function retrieveIds() {
    let retrieval = new XMLHttpRequest();
    retrieval.open("GET", "pullRecipeId.php", true);
    retrieval.send();

    retrieval.onreadystatechange = function () {
        if (retrieval.readyState === 4 && retrieval.status === 200) {

            let recipeIds = JSON.parse(retrieval.responseText)

            localStorage.setItem("ids", JSON.stringify(recipeIds));
        }
    }
}

function validateFields(ingredientCounter, instructionCounter) {
    let validForm = true;

    if (document.querySelector("input[name='inRecipeTitle']").value === "") {
        document.querySelector("#recipeTitle").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("input[name='inRecipeImage']").value === "") {
        document.querySelector("#recipeImg").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("#servingSize").value === "") {
        document.querySelector("#servingSizeLabel").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("input[name='inRecipeTime']").value === "") {
        document.querySelector("#recipeTimeLabel").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("input[name='inRecipeDifficulty']").value === "") {
        document.querySelector("#recipeDiffLabel").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    for (let i = 0; i < ingredientCounter; i++) {
        if (document.querySelector("#inIngredientTitle" + i).value === "") {
            document.querySelector("#ingredientTitle" + i).style.backgroundColor = "#F06A7C";
            validForm = false;
        }
        if (document.querySelector("#inIngredientQuantity" + i).value === "") {
            document.querySelector("#ingredientQuantity" + i).style.backgroundColor = "#F06A7C";
            validForm = false;
        }
    }
    for (let i = 0; i < instructionCounter; i++) {
        if (document.querySelector("#inInstructionHeading" + i).value === "") {
            document.querySelector("#instructionHeading" + i).style.backgroundColor = "#F06A7C";
            validForm = false;
        }
        if (document.querySelector("#inInstructionBody" + i).value === "") {
            document.querySelector("#instructionBody" + i).style.backgroundColor = "#F06A7C";
            validForm = false;
        }
    }
    if (document.querySelector("input[name='inSenderName']").value === "") {
        document.querySelector("#nameLabel").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("input[name='inSenderEmail']").value === "") {
        document.querySelector("#emailAddressLabel").style.backgroundColor = "#F06A7C";
        validForm = false;
    }
    if (document.querySelector("#senderComments").value === "") {
        document.querySelector("#additionalComments").style.backgroundColor = "#F06A7C";
        validForm = false;
    }

    return validForm;
}