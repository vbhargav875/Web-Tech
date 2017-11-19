<html>
<head>
</head>
<body>
<link rel="stylesheet" type="text/css" href="allmighty.css">
<table style="float:top">
<tr>
<td valign="top" width=25% id="left1">
<div id="left" >
<ol>
<li class="nav" ><a href="#1"> Python Overview</a></li>
	<ul><li class="nav" ><a href="#1.1"> Python Features</a></li>
	</ul>
<li class="nav" ><a href="#2"> Basic Python Syntax</a></li>
	<ul><li class="nav" ><a href="#2.1"> Python Identifiers</a></li>
		<li class="nav" ><a href="#2.2"> Lines and Indentation</a></li>
		<li class="nav" ><a href="#2.3"> Multi Line Statements</a></li>
		<li class="nav" ><a href="#2.4"> Quotation in Python</a></li>
		<li class="nav" ><a href="#2.5"> Comments in Python</a></li>
		</ul>
<li class="nav" ><a href="#3"> Python Variable Types</a></li>
	<ul><li class="nav" ><a href="#3.1"> Python Standard types</a></li>
		<li class="nav" ><a href="#3.2"> Python Numbers</a></li>
		<li class="nav" ><a href="#3.3"> Python Strings</a></li>
		<li class="nav" ><a href="#3.4"> Python Lists</a></li>
		<li class="nav" ><a href="#3.5"> Python Tuple</a></li>
		<li class="nav" ><a href="#3.6"> Python Dictionary</a></li>
		</ul> </ol>
</div>
</td>
<td width=50%>			
<div id="right">
<center><h2 id="1">Python Overview</h2></center>
Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.

Python is Interpreted: Python is processed at runtime by the interpreter. You do not need to compile your program before executing it. This is similar to PERL and PHP.

Python is Interactive: You can actually sit at a Python prompt and interact with the interpreter directly to write your programs.

Python is Object-Oriented: Python supports Object-Oriented style or technique of programming that encapsulates code within objects.

Python is a Beginner's Language: Python is a great language for the beginner-level programmers and supports the development of a wide range of applications from simple text processing to WWW browsers to games.
<h3 id="1.1"> Python Features</h3>
Easy-to-learn: Python has few keywords, simple structure, and a clearly defined syntax. This allows the student to pick up the language quickly.<br>
A broad standard library: Python's bulk of the library is very portable and cross-platform compatible on UNIX, Windows, and Macintosh.<br>
Interactive Mode:Python has support for an interactive mode which allows interactive testing and debugging of snippets of code.<br>

Portable: Python can run on a wide variety of hardware platforms and has the same interface on all platforms.<br>

Extendable: You can add low-level modules to the Python interpreter. These modules enable programmers to add to or customize their tools to be more efficient.<br>

Databases: Python provides interfaces to all major commercial databases.<br>

GUI Programming: Python supports GUI applications that can be created and ported to many system calls, libraries and windows systems, such as Windows MFC, Macintosh, and the X Window system of Unix.<br>
<center><h2 id="2">Basic Python Syntax</h2></center>
<h3 id="2.1">Python Identifiers</h3>
A Python identifier is a name used to identify a variable, function, class, module or other object. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores and digits (0 to 9).

Python does not allow punctuation characters such as @, $, and % within identifiers. Python is a case sensitive programming language. Thus, Manpower and manpower are two different identifiers in Python.
Here are naming conventions for Python identifiers -<br>

1) Class names start with an uppercase letter. All other identifiers start with a lowercase letter.<br>

2) Starting an identifier with a single leading underscore indicates that the identifier is private.<br>

3) Starting an identifier with two leading underscores indicates a strongly private identifier.<br>
4) If the identifier also ends with two trailing underscores, the identifier is a language-defined special name.<br>
<h3 id="2.2">Lines and Indentation</h3>
Python provides no braces to indicate blocks of code for class and function definitions or flow control. Blocks of code are denoted by line indentation, which is rigidly enforced.

The number of spaces in the indentation is variable, but all statements within the block must be indented the same amount. For example -<br>

<div class="code"> <code> if True:
    print "True"
else:
  print "False" </code></div>
However, the following block generates an error -<br>

<div class="code"><code>if True:<br>
    print "Answer"<br>
    print "True"<br>
else:<br>
    print "Answer"<br>
  print "False"<br></code> </div>
Thus, in Python all the continuous lines indented with same number of spaces would form a block. 
<h3 id="2.3">Multi-Line statements</h3>
Statements in Python typically end with a new line. Python does, however, allow the use of the line continuation character (\) to denote that the line should continue. For example -<br>

<div class="code"><code> total = item_one + \
        item_two + \
        item_three</code> </div><br>
Statements contained within the [], {}, or () brackets do not need to use the line continuation character. For example -<br>

<div class="code"><code> days = ['Monday', 'Tuesday', 'Wednesday',
        'Thursday', 'Friday']</code> </div>
<h3 id="2.4">Quotation in Python</h3>
Python accepts single ('), double (") and triple (''' or """) quotes to denote string literals, as long as the same type of quote starts and ends the string.

The triple quotes are used to span the string across multiple lines. For example, all the following are legal -<br>

<div class="code"><code> word = 'word'<br>
sentence = "This is a sentence.<br>
paragraph = """This is a paragraph. It is
made up of multiple lines and sentences."""</code> </div>
<h3 id="2.5">Comments in Python</h3>
A hash sign (#) that is not inside a string literal begins a comment. All characters after the # and up to the end of the physical line are part of the comment and the Python interpreter ignores them.<br>

<div class="code"><code> <span class="red">#!/usr/bin/python</span><br>

<span class="red"># First comment</span><br>
print "Hello, Python!" <span class="red"># second comment</span></code> </div>

<center><h2 id="3">Python Variable Types</h2></center>
Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.

Based on the data type of a variable, the interpreter allocates memory and decides what can be stored in the reserved memory. Therefore, by assigning different data types to variables, you can store integers, decimals or characters in these variables.<br>
Python variables do not need explicit declaration to reserve memory space. The declaration happens automatically when you assign a value to a variable. The equal sign (=) is used to assign values to variables.<br>

The operand to the left of the = operator is the name of the variable and the operand to the right of the = operator is the value stored in the variable. For example -<br>
<div class="code"><span class="red"><code> #!/usr/bin/python</span><br>

counter = 100          <span class="red"># An integer assignment</span><br>
miles   = 1000.0       <span class="red"># A floating point</span><br>
name    = "John"       <span class="red"># A string</span><br>

print counter<br>
print miles<br>
print name<br></code> </div>
Here, 100, 1000.0 and "John" are the values assigned to counter, miles, and name variables, respectively. This produces the following result -<br>

<div class="code"><code> 100<br>
1000.0<br>
John<br></code> </div>
<h3 id="3.1">Python standard Types</h3>
Python has five standard data types -<br>

1)Numbers<br>
2)String<br>
3)List<br>
4)Tuple<br>
5)Dictionary<br>

<h3 id="3.2">Python Numbers</h3>
Number data types store numeric values. Number objects are created when you assign a value to them. For example -<br>

<div class="code"><code> var1 = 1<br>
var2 = 10<br></code> </div>
You can also delete the reference to a number object by using the del statement. The syntax of the del statement is -<br>

<dive class="code"><code> del var1[,var2[,var3[....,varN]]]]</code> </div>
You can delete a single object or multiple objects by using the del statement. For example -<br>

<div class="code"><code> del var<br>
del var_a, var_b</code> </div>
Python supports four different numerical types -<br>

1)int (signed integers)<br>
2)long (long integers, they can also be represented in octal and hexadecimal)<br>
3)float (floating point real values)<br>
4)complex (complex numbers)<br>

<h3 id="3.3">python Strings</h3>
Strings in Python are identified as a contiguous set of characters represented in the quotation marks. Python allows for either pairs of single or double quotes. Subsets of strings can be taken using the slice operator ([ ] and [:] ) with indexes starting at 0 in the beginning of the string and working their way from -1 at the end.

The plus (+) sign is the string concatenation operator and the asterisk (*) is the repetition operator. For example -<br>
<div class="code"><code> <span class="red"> #!/usr/bin/python</span><br>

str = 'Hello World!'<br>

print str          <span class="red"> # Prints complete string</span><br>
print str[0]       <span class="red"> # Prints first character of the string</span><br>
print str[2:5]     <span class="red"> # Prints characters starting from 3rd to 5th</span><br>
print str[2:]      <span class="red"> # Prints string starting from 3rd character</span><br>
print str * 2      <span class="red"> # Prints string two times</span><br>
print str + "TEST" <span class="red"> # Prints concatenated string</span></code> </div>
This will produce the following result -<br>
<div class="code"><code> Hello World!<br>
H<br>
llo<br>
llo World!<br>
Hello World!Hello World!<br>
Hello World!TEST</code> </div>

<h3 id="3.4">Python Lists</h3>
Lists are the most versatile of Python's compound data types. A list contains items separated by commas and enclosed within square brackets ([]). To some extent, lists are similar to arrays in C. One difference between them is that all the items belonging to a list can be of different data type.

The values stored in a list can be accessed using the slice operator ([ ] and [:]) with indexes starting at 0 in the beginning of the list and working their way to end -1. The plus (+) sign is the list concatenation operator, and the asterisk (*) is the repetition operator. For example -<br>

<div class="code"><code> <span class="red"> #!/usr/bin/python</span><br>

list = [ 'abcd', 786 , 2.23, 'john', 70.2 ]<br>
tinylist = [123, 'john']<br>

print list        <span class="red">   # Prints complete list</span><br>
print list[0]     <span class="red">   # Prints first element of the list</span><br>
print list[1:3]    <span class="red">  # Prints elements starting from 2nd till 3rd</span><br> 
print list[2:]     <span class="red">  # Prints elements starting from 3rd element</span><br>
print tinylist * 2  <span class="red"> # Prints list two times</span><br>
print list + tinylist <span class="red"> # Prints concatenated lists</span></code> </div>
This produce the following result -<br>

<div class="code"><code> ['abcd', 786, 2.23, 'john', 70.200000000000003]<br>
abcd<br>
[786, 2.23]<br>
[2.23, 'john', 70.200000000000003]<br>
[123, 'john', 123, 'john']<br>
['abcd', 786, 2.23, 'john', 70.200000000000003, 123, 'john']<br></code> </div>

<h3 id="3.5">Python tuple</h3>
A tuple is another sequence data type that is similar to the list. A tuple consists of a number of values separated by commas. Unlike lists, however, tuples are enclosed within parentheses.

The main differences between lists and tuples are: Lists are enclosed in brackets ( [ ] ) and their elements and size can be changed, while tuples are enclosed in parentheses ( ( ) ) and cannot be updated. Tuples can be thought of as read-only lists. For example -<br>

<div class="code"><code> <span class="red"> #!/usr/bin/python</span><br>

tuple = ( 'abcd', 786 , 2.23, 'john', 70.2  )<br>
tinytuple = (123, 'john')<br>

print tuple      <span class="red"> # Prints complete list</span><br>
print tuple[0]       <span class="red">  # Prints first element of the list</span><br>
print tuple[1:3]    <span class="red">   # Prints elements starting from 2nd till 3rd </span><br>
print tuple[2:]      <span class="red">  # Prints elements starting from 3rd element</span><br>
print tinytuple * 2  <span class="red">  # Prints list two times</span><br>
print tuple + tinytuple <span class="red"> # Prints concatenated lists</span></code> </div>
This produce the following result-<br>
<div class="code"><code> ('abcd', 786, 2.23, 'john', 70.200000000000003)<br>
abcd<br>
(786, 2.23)<br>
(2.23, 'john', 70.200000000000003)<br>
(123, 'john', 123, 'john')<br>
('abcd', 786, 2.23, 'john', 70.200000000000003, 123, 'john')<br></code> </div>

<h3 id="3.6">Python Dictionaries</h3>
Python's dictionaries are kind of hash table type. They work like associative arrays or hashes found in Perl and consist of key-value pairs. A dictionary key can be almost any Python type, but are usually numbers or strings. Values, on the other hand, can be any arbitrary Python object.

Dictionaries are enclosed by curly braces ({ }) and values can be assigned and accessed using square braces ([]). For example -<br>

<div class="code"><code> <span class="red"> #!/usr/bin/python</span><br>

dict = {}<br>
dict['one'] = "This is one"<br>
dict[2]     = "This is two"<br>

tinydict = {'name': 'john','code':6734, 'dept': 'sales'}<br>

print dict['one']       <span class="red"> # Prints value for 'one' key</span><br>
print dict[2]          <span class="red">  # Prints value for 2 key</span><br>
print tinydict        <span class="red">   # Prints complete dictionary</span><br>
print tinydict.keys()  <span class="red">  # Prints all the keys</span><br>
print tinydict.values() <span class="red"> # Prints all the values</span></code> </div>
This produce the following result -<br>

<div class="code"><code> This is one<br>
This is two<br>
{'dept': 'sales', 'code': 6734, 'name': 'john'}<br>
['dept', 'code', 'name']<br>
['sales', 6734, 'john']<br></code> </div>
Dictionaries have no concept of order among elements. It is incorrect to say that the elements are "out of order", they are simply unordered.

</div>
</td>

<td width=25% style="float:right">
<img src="work2.png" alt="yo" width=350px align="right"/>
<img src="work.png" alt="yay" width=350px style="display:block;position:absolute;left:1140px
;top:400px" />
</td>
</tr>
</table>
<a href="#1"><img src="up.png" width=50px height=50px style="position:fixed;left:1440px; top:650px">
</a>

<br><br>Welcome! You have made it this far, now let us test your python knowledge.
<br>
<form method="POST" action="form.php">
<div class="mcq"> Which of the following is invalid variable<br>
<input type="radio" name="1" value="a">my_string_1</input>
<input type="radio" name="1" value="b">1st_string</input>
<input type="radio" name="1" value="c">foo</input>
<input type="radio" name="1" value="d">_</input>
</div><br><br>

<div class="mcq">Which of the following create a dictionary?<br>
<input type="radio" name="2" value="a">d={}</input><br>
<input type="radio" name="2" value="b">d={"john":40,"peter":45}</input><br>
<input type="radio" name="2" value="c">d={40:"john",45:"peter"}</input><br>
<input type="radio" name="2" value="d">All of the above</input>
</div><br><br>

<div class="mcq">What is the output when we execute list("hello")?<br>
<input type="radio" name="3" value="a">['h', 'e', 'l', 'l', 'o']</input><br>
<input type="radio" name="3" value="b">['hello']</input><br>
<input type="radio" name="3" value="c">['llo']</input><br>
<input type="radio" name="3" value="d">['olleh']</input>
</div><br><br>

<div class="mcq">What is the answer to this expression,22 % 3 is?<br>
<input type="radio" name="4" value="a">7</input>
<input type="radio" name="4" value="b">1</input>
<input type="radio" name="4" value="c">0</input>
<input type="radio" name="4" value="d">5</input>
</div><br>
<input type="submit" >
</form>



</body>
          

