# Jeu de carte Magix (fr)
 
J'ai réalisé ce jeu au courant de ma cinquième session en technique d'informatique au Cégep du Vieux-Montréal.
Essentiellement, le but du projet était de programmer l'interface utilisateur autour d'un jeu déjà existant et d'enforcer certaines mécaniques du côté client.

### Les compétences acquises pendant ce projet furent:
- faire des requêtes à un API (Ajax)
- PHP
- Javascript
- Patron de conception Template

### La classe CommonAction
La classe CommonAction implémente un patron de conception Template.
La méthode execute() agit comme la méthode template. Elle définit la structure générale de l'opération qui est:
- Vérifier si l'utilisateur a une visibilité suffisante pour accéder à la page.
- Si la visibilité est insuffisante, elle redirige l'utilisateur à la page de connection.
- Sinon, elle appelle la méthode abstraite executeAction() qui est implémentée dans les classes enfants.
- Retourner les données avec des informations sur la visibilité et le nom d'utilisateur.

En regardant la classe AjaxAction, on voit qu'elle implémente la logique spécifique de traitement des requêtes AJAX pour les membres 
connectés, tout en conservant la structure générale de la méthode execute() définie par le patron de conception Template dans la classe parent CommonAction.

# Magix Card Game (eng)
I created this game during my fifth semester in the Computer Science program at Cégep du Vieux-Montréal. Essentially, the goal of the project was to program the user interface around an existing game and enforce certain client-side mechanics.

### Skills acquired during this project were:
- Making API requests (Ajax)
- PHP
- Javascript
- Template Design Pattern

### The CommonAction class
The CommonAction class implements a Template Design Pattern. The execute() method acts as the template method. It defines the general structure of the operation, which is:
- Check if the user has sufficient visibility to access the page.
- If visibility is insufficient, redirect the user to the login page.
- Otherwise, call the abstract method executeAction() which is implemented in child classes.
- Return the data with information about visibility and the username.

Looking at the AjaxAction class, we can see that it implements the specific logic for handling AJAX requests for connected members while maintaining the 
general structure of the execute() method defined by the Template Design Pattern in the parent CommonAction class.

![Login page](/MagixCardGame/git_assets/login.png?raw=true "Login page")
![Lobby page](/MagixCardGame/git_assets/lobby.png?raw=true "Lobby page")
![Game page](/MagixCardGame/git_assets/ingame.png?raw=true "Game page")
![Deck page](/MagixCardGame/git_assets/deck.png?raw=true "Deck page")
