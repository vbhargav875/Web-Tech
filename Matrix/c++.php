<html>
<head>
</head>
<body>
<link rel="stylesheet" type="text/css" href="allmighty.css">
<table style="float:top">
<tr>
<td valign="top" width="25% id="left1">
<div id="left">
<ol>
<li class="nav"><a href="#1" >C++ Overwiew</a></li>
	<ul><li class="nav"><a href="#1.1" >Object Programming</a></li>
	    <li class="nav"><a href="#1.2" >Standard Library</a></li>
	    <li class="nav"><a href="#1.3" >Use of C++</a></li>
	</ul>
<li class="nav"><a href="#2" >C++ Basic Syntax</a></li>
	<ul><li class="nav"><a href="#2.1" >C++ Identifiers</a></li>
	    <li class="nav"><a href="#2.2" >Whitespaces in C++</a></li>
	 </ul>
<li class="nav"><a href="#3" >Variable Types</a></li>
	<ul><li class="nav"><a href="#3.1" >Variable definition</a></li>
	    <li class="nav"><a href="#3.2" >Lvalues and Rvalues</a></li>
	</ul></ol> 
</div>
</td>
<td width="50%">
<div id="right">        
<center><h2 id="1">C++ Overview</h2></center>
C++ is a statically typed, compiled, general-purpose, case-sensitive, free-form programming language that supports procedural, object-oriented, and generic programming.
C++ is regarded as a middle-level language, as it comprises a combination of both high-level and low-level language features.
C++ was developed by Bjarne Stroustrup starting in 1979 at Bell Labs in Murray Hill, New Jersey, as an enhancement to the C language and originally named C with Classes but later it was renamed C++ in 1983.
C++ is a superset of C, and that virtually any legal C program is a legal C++ program.
<h3 id="1.1">Object Oriented Programming</h3>
C++ fully supports object-oriented programming, including the four pillars of object-oriented development -<br>
1)Encapsulation<br>
2)Data hiding<br>
3)Inheritance<br>
4)Polymorphism
<h3 id="1.2">Standard Library</h3>
Standard C++ consists of three important parts -<br>
1)The core language giving all the building blocks including variables, data types and literals, etc.<br>
2)The C++ Standard Library giving a rich set of functions manipulating files, strings, etc.<br>
3)The Standard Template Library (STL) giving a rich set of methods manipulating data structures, etc.
<h3 id="1.3">Use of C++</h3>
C++ is used by hundreds of thousands of programmers in essentially every application domain.
C++ is being highly used to write device drivers and other software that rely on direct manipulation of hardware under realtime constraints.<br>
C++ is widely used for teaching and research because it is clean enough for successful teaching of basic concepts.
Anyone who has used either an Apple Macintosh or a PC running Windows has indirectly used C++ because the primary user interfaces of these systems are written in C++.

<center><h2 id="2">C++ Basic Syntax</h2></center>
When we consider a C++ program, it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what a class, object, methods, and instant variables mean.<br>
1)Object - Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors - wagging, barking, eating. An object is an instance of a class.<br>
2)Class - A class can be defined as a template/blueprint that describes the behaviors/states that object of its type support.<br>
3)Methods - A method is basically a behavior. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.<br>
4)Instance Variables - Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.<br>
<h3 id="2.1">C++ Identifiers</h3>
A C++ identifier is a name used to identify a variable, function, class, module, or any other user-defined item. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores, and digits (0 to 9).
C++ does not allow punctuation characters such as @, $, and % within identifiers. C++ is a case-sensitive programming language. Thus, Manpower and manpower are two different identifiers in C++.<br>
Here are some examples of acceptable identifiers -<br>

<div class="code"><code>mohd       zara    abc   move_name  a_123<br>
myname50   _temp   j     a23b9      retVal</code></div>
<h3 id="2.2">Whitespaces in C++</h3>
A line containing only whitespace, possibly with a comment, is known as a blank line, and C++ compiler totally ignores it.
Whitespace is the term used in C++ to describe blanks, tabs, newline characters and comments. Whitespace separates one part of a statement from another and enables the compiler to identify where one element in a statement, such as int, ends and the next element begins.<br>
Statement 1<br>
<div class="code"><code>int age;</code></div>
In the above statement there must be at least one whitespace character (usually a space) between int and age for the compiler to be able to distinguish them.<br>
Statement 2<br>
<div class="code"><code>fruit = apples + oranges;<span class="red">// Get the total fruit</span></code></div>
In the above statement 2, no whitespace characters are necessary between fruit and =, or between = and apples, although you are free to include some if you wish for readability purpose.
<h3 id="2.3">Semicolons and Blocks</h3>
In C++, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.<br>
For example -<br>

<div class="code"><code>x = y;<br>
y = y + 1;<br>
add(x, y);</code></div>

<center><h2 id="3">Variable types</h2></center>
<h3 id="3.1">Variable definition</h3>
A variable definition tells the compiler where and how much storage to create for the variable. A variable definition specifies a data type, and contains a list of one or more variables of that type.
Here, type must be a valid C++ data type including char, w_char, int, float, double, bool or any user-defined object, etc., and variable_list may consist of one or more identifier names separated by commas. Some valid declarations are shown here -<br>

<div class="code"><code>int    i, j, k;<br>
char   c, ch;<br>
float  f, salary;<br>
double d;</code></div>
The line int i, j, k; both declares and defines the variables i, j and k; which instructs the compiler to create variables named i, j and k of type int.
<h3 id="3.2">Lvalues and Rvalues</h3>
There are two kinds of expressions in C++ -<br>
1)lvalue - Expressions that refer to a memory location is called "lvalue" expression. An lvalue may appear as either the left-hand or right-hand side of an assignment.<br>
2)rvalue - The term rvalue refers to a data value that is stored at some address in memory. An rvalue is an expression that cannot have a value assigned to it which means an rvalue may appear on the right- but not left-hand side of an assignment.<br>
Variables are lvalues and so may appear on the left-hand side of an assignment. Numeric literals are rvalues and so may not be assigned and can not appear on the left-hand side. Following is a valid statement -<br>

<div class="code"><code>int g = 20;</code></div>
But the following is not a valid statement and would generate compile-time error -<br>
<div class="code"><code>10 = 20;</code></div>

</div>
</td>
<td width="25%" style="float:right">
<img src="work3.png" alt="yo" width=300px align="right"/>
<img src="work4.jpg" alt="yay" width=300px style="display:block;position:absolute;
left:1205px;top:350px" />
</td>
</tr>
</table>
<a href="#1"><img src="up.png" width=50px height=50px style="position:fixed;left:1440px; top:660px">
</a>


<br><br>Well hello there!you made it this far, now let us test your knowledge<br><br>
<form method="POST" action="form.php">
<div class="mcq">Pick the odd one out<br>
<input type="radio" name="1" value="a">character type</input><br>
<input type="radio" name="1" value="b"> array type</input><br>
<input type="radio" name="1" value="c">booloean type</input><br>
<input type="radio" name="1" value="d">integer type</input><br>
</div><br><br>

<div class="mcq">which type is the best suited to represent logical values?<br>
<input type="radio" name="2" value="a">integer</input><br>
<input type="radio" name="2" value="b">all of the mentioned</input><br>
<input type="radio" name="2" value="c">character</input><br>
<input type="radio" name="2" value="d">boolean</input>
</div><br><br>

<div class="mcq"><Which of the following will not return a value<br>
<input type="radio" name="3" value="a">void</input><br>
<input type="radio" name="3" value="b">null</input><br>
<input type="radio" name="3" value="c">empty</input><br>
<input type="radio" name="3" value="d">free</input>
</div><br><br>

<div class="mcq">_____ have the return type void<br>
<input type="radio" name="4" value="a">all functions</input><br>
<input type="radio" name="4" value="b">none of the mentioned</input><br>
<input type="radio" name="4" value="c">constructors</input><br>
<input type="radio" name="4" value="d">destructors</input>
</div><br>
<input type="submit" >
</form>   
</body></html>          