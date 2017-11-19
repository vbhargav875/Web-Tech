<html>
<head></head>
<body>
<link rel="stylesheet" type="text/css" href="allmighty.css">
<table style="float:top">
<tr>
<td valign="top" width=25% id="left1">
<div id="left">
<ol>
<li class="nav"><a href="#1"> Java Overview</a></li>
	<ul><li class="nav"><a href="#1.1">History</a></li>
	    <li class="nav"><a href="#1.2">Tools</a></li>
	</ul>
<li class="nav"><a href="#2">Basic syntax</a></li>
	<ul><li class="nav"><a href="#2.1">Java variables</a></li>
	    <li class="nav"><a href="#2.2">Arrays</a></li>
	    <li class="nav"><a href="#2.3">Java Enums</a></li>
	</ul> 
<li class="nav"><a href="#3">Basic Datatypes</a></li>
	<ul><li class="nav"><a href="#3.1">Primitive Datatypes</a></li>
	    <li class="nav"><a href="#3.2">Reference Datatypes</a></li>
	    <li class="nav"><a href="#3.3">Java Literals</a></li>
	</ul></ol>
</div>
</td>
<td width=50%>
<div id="right">
<center><h2 id="1">Java Overview</h2></center>
Java programming language was originally developed by Sun Microsystems which was initiated by James Gosling and released in 1995 as core component of Sun Microsystems' Java platform (Java 1.0 [J2SE]).
The latest release of the Java Standard Edition is Java SE 8. With the advancement of Java and its widespread popularity, multiple configurations were built to suit various types of platforms. For example: J2EE for Enterprise Applications, J2ME for Mobile Applications.
The new J2 versions were renamed as Java SE, Java EE, and Java ME respectively. Java is guaranteed to be Write Once, Run Anywhere.
<h3 id="1.1">History of Java</h3>
James Gosling initiated Java language project in June 1991 for use in one of his many set-top box projects. The language, initially called ‘Oak’ after an oak tree that stood outside Gosling's office, also went by the name ‘Green’ and ended up later being renamed as Java, from a list of random words.
Sun released the first public implementation as Java 1.0 in 1995. It promised Write Once, Run Anywhere (WORA), providing no-cost run-times on popular platforms.
On 13 November, 2006, Sun released much of Java as free and open source software under the terms of the GNU General Public License (GPL).
On 8 May, 2007, Sun finished the process, making all of Java's core code free and open-source, aside from a small portion of code to which Sun did not hold the copyright.
<h3 id="1.2">Tool you will need</h3>
For performing the examples discussed in this tutorial, you will need a Pentium 200-MHz computer with a minimum of 64 MB of RAM (128 MB of RAM recommended).
You will also need the following softwares -<br>

1)Linux 7.1 or Windows xp/7/8 operating system<br>
2)Java JDK 8<br>
3)Microsoft Notepad or any other text editor<br>
This tutorial will provide the necessary skills to create GUI, networking, and web applications using Java.

<center><h2 id="2">Basic syntax</h2></center>
When we consider a Java program, it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what do class, object, methods, and instance variables mean.</br>
1)Object - Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behavior such as wagging their tail, barking, eating. An object is an instance of a class.<br>
2)Class - A class can be defined as a template/blueprint that describes the behavior/state that the object of its type supports.<br>
3)Methods - A method is basically a behavior. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.<br>
4)Instance Variables - Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.
<h3 id="2.1">Java variables</h3>
Following are the types of variables in Java -<br>

1)Local Variables<br>
2)Class Variables (Static Variables)<br>
3)Instance Variables (Non-static Variables)
<h3 id="2.2">Arrays</h3>
Arrays are objects that store multiple variables of the same type. However, an array itself is an object on the heap. <br>
We will look into how to declare, construct, and initialize in the upcoming chapters.
<h3 id="2.3">Java enums</h3>
Arrays are objects that store multiple variables of the same type. However, an array itself is an object on the heap.<br>
We will look into how to declare, construct, and initialize in the upcoming chapters.

<center><h2 id="3">Basic Datatypes</h2></center>
<h3 id="3.1>Primitive Datatypes</h3>
There are eight primitive datatypes supported by Java. Primitive datatypes are predefined by 
the language and named by a keyword. Let us now look into the eight primitive data types in detail.<br>
1)Byte<br>
2)Short<br>
3)Int<br>
4)Long<br>
5)Float<br>
6)Double<br>
7)Boolean<br>
8)Char
<h3 id="3.2">Reference Datatypes</h3>
1)Reference variables are created using defined constructors of the classes. They are used to access objects. These variables are declared to be of a specific type that cannot be changed. For example, Employee, Puppy, etc.<br>
2)Class objects and various type of array variables come under reference datatype.<br>
3)Default value of any reference variable is null.<br>
4)A reference variable can be used to refer any object of the declared type or any compatible type.<br>
Example: Animal animal = new Animal("giraffe");
<h3 id="3.3">Java literals</h3>
A literal is a source code representation of a fixed value. They are represented directly in the code without any computation.

Literals can be assigned to any primitive type variable. For example -<br>

<div class="code"><code>byte a = 68;<br>
char a = 'A'</code></div>
byte, int, long, and short can be expressed in decimal(base 10), hexadecimal(base 16) or octal(base 8) number systems as well.

Prefix 0 is used to indicate octal, and prefix 0x indicates hexadecimal when using these number systems for literals. For example -<br>

<div class="code"><code>int decimal = 100;<br>
int octal = 0144;<br>
int hexa =  0x64;</code></div>

</div>
</td>

<td width="25% style="float:right">
<img src="work5.jpg" alt="yo" width=270px style="display:block;position:absolute;
left:1170px; top:100px" />
<img src="work6.png" alt="yay" width=300px style="display:block;position:absolute;
left:1160px;top:500px" />
</td>
</table>
<a href="#1"><img src="up.png" width=50px height=50px style="position:fixed;left:1440px; top:650px">
</a>

<br><br>Welcome coders!you have come this far, now let us test your knowlegde.<br>
<form method="POST" action="form.php">
<div class="mcq">Which of these is a long data type literal?</br>
<input type="radio" name="1" value="a">ABCDEFG</input><br>
<input type="radio" name="1" value="b">0x99fffL</input><br>
<input type="radio" name="1" value="c">0x99fffa</input><br>
<input type="radio" name="1" value="d">99671246</input>
</div><br><br>

<div class="mcq">Which of these can be returned by the operator &?<br>
<input type="radio" name="2" value="a">Integer</input><br>
<input type="radio" name="2" value="b">Boolean</input><br>
<input type="radio" name="2" value="c">Character</input><br>
<input type="radio" name="2" value="d">Integer or boolean</input>
</div><br><br>

<div class="mcq">Literals in Java must be appenden by which of these?<br>
<input type="radio" name="3" value="a">L and l</input><br>
<input type="radio" name="3" value="b">l</input><br>
<input type="radio" name="3" value="c">D</input><br>
<input type="radio" name="3" value="d">L</input>
</div><br><br>

<div class="mcq">Which of these cannot be used for a variable name?<br>
<input type="radio" name="4" value="a">identifier</input><br>
<input type="radio" name="4" value="b">keyword</input><br>
<input type="radio" name="4" value="c">identifier and keyword</input><br>
<input type="radio" name="4" value="d">none of these</input>
</div><br>
<input type="submit" >
</form>
</body></html>


