# JustShout2

A simple chat box where people can chat/shout together in a group.

  - No signup required, can be used anonymously
  - Latest Material Design and uses Ajax. 
  - Nice UI and easy to use and can be fun

The link to the app is **[JustShout2](http://ashokdey.in/projects/jushshout2)**

### Version
1.0

### TechStack

Dillinger uses a number of open source projects to work properly:
* **HTML5**
* **CSS3**
* **PHP**
* **MySQL**

And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

### Installation

1. First of all, create a Database, let's say __'myDB'__
2. Create a table named __'chats'__ containing 4 coloumns :
    * id : __datatype__ = int __primary key and auto increment__
    * username : __datatype__ = varchar 
    * message : __datatype__ = varchar
    * time : __datatype__ = timestamp and default-value = __CURRENT_TIMESTAMP__
3. Edit all the variables in the __db.php__ file according to your environment.
4. __Don't forget__ to edit the __$query__ variable according to your __tablename__

### Download CSS Frameworks

__JustShout2__ is currently extended with the following plugins

* Materialize - A Material Design Framework. Link : http://materialize.com
* FontAwesome - A collection of font icons Link : https://fortawesome.github.io/Font-Awesome/

## Contribute

You can use and modiffy it according to your needs. Just click on the __DownloadZip__ icon at the top.

License
----

MIT

**Free Software, Hell Yeah!**
