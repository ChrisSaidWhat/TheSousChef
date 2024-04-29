class Request {
    //  properties
    requestedRecipeTitle;
    requestedRecipeImage;
    requestedRecipeServingSize;
    requestedRecipeTime;
    requestedRecipeDifficulty;

    requestedIngredientTitles = [];
    requestedIngredientQuantities = [];

    requestedInstructionHeadings = [];
    requestedInstructionBodies = [];

    requestSenderName;
    requestSenderEmail;
    requestSenderComments;

    //  constructor
    constructor() {
        this.requestedRecipeTitle = "";
        this.requestedRecipeImage = "";
        this.requestedRecipeServingSize = "";
        this.requestedRecipeTime = "";
        this.requestedRecipeDifficulty = "";
        this.requestedIngredientTitles = [];
        this.requestedIngredientQuantities = [];
        this.requestedInstructionHeadings = [];
        this.requestedInstructionBodies = [];
        this.requestSenderName = "";
        this.requestSenderEmail = "";
        this.requestSenderComments = "";
    }

    //  getters and setters
    getRequestedRecipeTitle() {
        return this.requestedRecipeTitle;
    }

    setRequestedRecipeTitle(inTitle) {
        this.requestedRecipeTitle = inTitle;
    }

    getRequestedRecipeImage() {
        return this.requestedRecipeImage;
    }

    setRequestedRecipeImage(inPath) {
        this.requestedRecipeImage = inPath;
    }

    getRequestedRecipeServingSize() {
        return this.requestedRecipeServingSize;
    }

    setRequestedRecipeServingSize(inSize) {
        this.requestedRecipeServingSize = inSize;
    }

    getRequestedRecipeTime() {
        return this.requestedRecipeTime;
    }

    setRequestedRecipeTime(inTime) {
        this.requestedRecipeTime = inTime;
    }

    getRequestedRecipeDifficulty() {
        return this.requestedRecipeDifficulty;
    }

    setRequestedRecipeDifficulty(inDifficulty) {
        this.requestedRecipeDifficulty = inDifficulty;
    }

    getRequestedIngredientTitles() {
        return this.requestedIngredientTitles;
    }

    setRequestedIngredientTitles(inTitlesArr) {
        this.requestedIngredientTitles = inTitlesArr;
    }

    getRequestedIngredientQuantities() {
        return this.requestedIngredientQuantities;
    }

    setRequestedIngredientQuantities(inQuantitiesArr) {
        this.requestedIngredientQuantities = inQuantitiesArr;
    }

    getRequestedInstructionHeadings() {
        return this.requestedInstructionHeadings;
    }

    setRequestedInstructionHeadings(inHeadingsArr) {
        this.requestedInstructionHeadings = inHeadingsArr;
    }

    getRequestedInstructionBodies() {
        return this.requestedInstructionBodies;
    }

    setRequestedInstructionBodies(inBodiesArr) {
        this.requestedInstructionBodies = inBodiesArr;
    }

    getRequestSenderName() {
        return this.requestSenderName;
    }

    setRequestSenderName(inName) {
        this.requestSenderName = inName;
    }

    getRequestSenderEmail() {
        return this.requestSenderEmail;
    }

    setRequestSenderEmail(inEmail) {
        this.requestSenderEmail = inEmail;
    }

    getRequestSenderComments() {
        return this.requestSenderComments;
    }

    setRequestSenderComments(inComment) {
        this.requestSenderComments = inComment;
    }

    //  processing functions
    addIngredientQuantity(inQuantity) {
        this.requestedIngredientQuantities.push(inQuantity);
    }

    addIngredientTitle(inTitle) {
        this.requestedIngredientTitles.push(inTitle);
    }

    addInstructionBody(inBody) {
        this.requestedInstructionBodies.push(inBody);
    }

    addInstructionHeading(inHeading) {
        this.requestedInstructionHeadings.push(inHeading);
    }

    removeIngredientQuantity() {
        this.requestedIngredientQuantities.pop();
    }

    removeIngredientTitle() {
        this.requestedIngredientTitles.pop();
    }

    removeInstructionBody() {
        this.requestedInstructionBodies.pop();
    }

    removeInstructionHeading() {
        this.requestedInstructionHeadings.pop();
    }
}