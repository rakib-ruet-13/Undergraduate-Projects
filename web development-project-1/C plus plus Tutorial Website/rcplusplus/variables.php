<!DOCTYPE html>
<html>

<head>
  <title>rcplusplus.com</title>
    <link rel="stylesheet" type="text/css" href="cc++_style.css">


</head>
<body>


<div class="main">




    <div class="cover_image">
       <p> <img src="/rcplusplus/logo.png"></p>
    </div>





   
    <div class="manubar">
    <ul>
       <li><a href="homepage.php">HOME</a></li>
      <li><a href="CC++.php">C/C++</a></li>
      <li><a href="ALGORITHM.php">ALGORITHM</a></li>
      <li><a href="RANKLIST.php">RANKLIST</a></li>
      <li><a href="ABOUT.php">ABOUT</a></li>
      <li><a href="forum.php.">FORUM</a></li>
    </ul>

    </div>

    <div class="content">

     <div class="intro">

     <h1>Variables</h1>
     <br>
     <p>
     A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in C has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.
     <br>

     <p>
     The name of a variable can be composed of letters, digits, and the underscore character. It must begin with either a letter or an underscore. Upper and lowercase letters are distinct because C is case-sensitive. Based on the basic types explained in the previous chapter, there will be the following basic variable types - 
     <br>
     </p>
     
     <p>
    <table>
      <tr>
        <th>Type</th>
        <th>Description</th>
      </tr>

      <tr>
        <td>char</td>
         <td>Typically a single octet(one byte). This is an integer type.</td>
      </tr>

       <tr>
        <td>int</td>
         <td> The most natural size of integer for the machine.</td>
      </tr>

       <tr>
        <td>float</td>
         <td> A single-precision floating point value.</td>
      </tr>

       <tr>
        <td>double</td>
         <td>A double-precision floating point value.</td>
      </tr>

       <tr>
        <td>void</td>
         <td>Represents the absence of type.</td>
      </tr>

    </table>

     </p>

     <p>
     C programming language also allows to define various other types of variables, which we will cover in subsequent chapters like Enumeration, Pointer, Array, Structure, Union, etc. For this chapter, let us study only basic variable types.
     <br>

     Here, type must be a valid C data type including char, w_char, int, float, double, bool, or any user-defined object; and variable_list may consist of one or more identifier names separated by commas. Some valid declarations are shown here −
     <br>

     <pre>
     int    i, j, k;
     char   c, ch;
     float  f, salary;
     double d;
     </pre>
    
     The line int i, j, k; declares and defines the variables i, j, and k; which instruct the compiler to create variables named i, j and k of type int.
     <br>

     Variables can be initialized (assigned an initial value) in their declaration. The initializer consists of an equal sign followed by a constant expression as follows :<br>

     <pre>
     <br>
       type variable_name = value;
     </pre>
     <br>
     Some examples are:
     <br>
     <pre>

     extern int d = 3, f = 5;    // declaration of d and f. 
     int d = 3, f = 5;           // definition and initializing d and f. 
     byte z = 22;                // definition and initializes z. 
     char x = 'x';               // the variable x has the value 'x'.
       
     </pre>

    <br>
    For definition without an initializer: variables with static storage duration are implicitly initialized with NULL (all bytes have the value 0); the initial value of all other variables are undefined.

    <br>
     <b>Example</b><br>
    Try the following example, where variables have been declared at the top, but they have been defined and initialized inside the main function −
    <br>

    <pre>

 #include < stdio.h >

// Variable declaration:
extern int a, b;
extern int c;
extern float f;

int main () {

   /* variable definition: */
   int a, b;
   int c;
   float f;
 
   /* actual initialization */
   a = 10;
   b = 20;
  
   c = a + b;
   printf("value of c : %d \n", c);

   f = 70.0/3.0;
   printf("value of f : %f \n", f);
 
   return 0;
}
    </pre>

     <br>
     output:<br>

     <pre>
       value of c : 30
       value of f : 23.333334
     </pre>
       
     </p>
</div>

    <div class="sidebar">

     <ul>
       <li><a href="CC++.php">intro</a></li>
        <li><a href="variables.php">Variables</a></li>
         <li><a href="conditional statement.php">conditional statement</a></li>
       <li><a href="array.php">Array</a></li>
       <li><a href="loop.php">Loop</a></li>
       <li><a href="pointer.php">pointer</a></li>
       <li><a href="string.php">String</a></li>
        <li><a href="struct.php">Structure</a></li>
         <li><a href="file.php">File</a></li>
      </ul>
     </div>
     
        
    </div>



    <div class="links">
    <h3>Some useful learning websites</h3>
      <ul>
          <li><a href="http:\www.geeksforgeeks.com">GeeksforGeeks</a></li>
           <li><a href="http:\www.shafayeysplannet.com">Bangla algorithm</a></li>
            <li><a href="http:\www.cplusplus.com">C++ STL </a></li>
             <li><a href="http:\www.codeforces.com">Competetive programming</a></li>
              <li><a href="http:\www.w3school.com">W3school.com</a></li>
      </ul>  

    </div>


    <div class="copy">
        <p>&copy;Rakibul hassan <br>all rights reserved by rcplusplus.com</p>
    </div>


  
</div>
</body>
</html>