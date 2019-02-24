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
      <li><a href="forum.php.">C/C++</a></li>
    </ul>

    </div>


    <div class="content">

     <div class="intro">

     <h1>Strings</h1>
     <br>
     <p>
        Strings are actually one-dimensional array of characters terminated by a null character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a null.<br><br>

        The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello":
     <br><br>
     

     <pre>
     char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
     </pre>
     <br>
     If you follow the rule of array initialization then you can write the above statement as follows −
     <br><br>
     <pre>
       char greeting[] = "Hello";
     </pre>

     <br><br>
     Following is the memory presentation of the above defined string in C/C++ −
     <br>
     <br>
     <img src="string_representation.jpg" alt="string representation">
     <br>
     Actually, you do not place the null character at the end of a string constant. The C compiler automatically places the '\0' at the end of the string when it initializes the array. Let us try to print the above mentioned string −<br><br>

     <pre>
       #include < stdio.h>

       int main () {

        char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
        printf("Greeting message: %s\n", greeting );
        return 0;
        }
       </pre>

       <br>
       When the above code is compiled and executed, it produces the following result :
       <br>
       <br>
       <pre>
        Greeting message: Hello 
       </pre>
       C supports a wide range of functions that manipulate null-terminated strings :
       <br>
       <br>

       <table>
         <tr>
           <th>Function & Purpose</th>
         </tr>
         <tr>
           <td>
         
               strcpy(s1, s2);

          Copies string s2 into string s1.
           </td>
         </tr>

          <tr>
           <td>
         strcat(s1, s2);

Concatenates string s2 onto the end of string s1.
           </td>
         </tr>

          <tr>
           <td>
         
            strlen(s1);

Returns the length of string s1.
           </td>
         </tr>

          <tr>
           <td>
         strcmp(s1, s2);

Returns 0 if s1 and s2 are the same; less than 0 if s1< s2 ; greater than 0 if s1>s2.
              
           </td>
         </tr>

          <tr>
           <td>
         
            strchr(s1, ch);

Returns a pointer to the first occurrence of character ch in string s1.
           </td>
         </tr>

  <tr>
           <td>
         strstr(s1, s2);

Returns a pointer to the first occurrence of string s2 in string s1.
         
           </td>
         </tr>




       </table>
       


<br>

<b>sample program: </b><br>

<pre>
#include < stdio.h>
#include < string.h>

int main () {

   char str1[12] = "Hello";
   char str2[12] = "World";
   char str3[12];
   int  len ;

   /* copy str1 into str3 */
   strcpy(str3, str1);
   printf("strcpy( str3, str1) :  %s\n", str3 );

   /* concatenates str1 and str2 */
   strcat( str1, str2);
   printf("strcat( str1, str2):   %s\n", str1 );

   /* total lenghth of str1 after concatenation */
   len = strlen(str1);
   printf("strlen(str1) :  %d\n", len );

   return 0;
}
</pre>


<br><br>
When the above code is compiled and executed, it produces the following result:
<br>     
<pre>
strcpy( str3, str1) :  Hello
strcat( str1, str2):   HelloWorld
strlen(str1) :  10
</pre>





<br><br>

<b>Function to input and output string: </b>

<br>
<br>
There are predefined functions gets() and puts in C language to read and display string respectively.<br>

<pre>
    int main(){
    char name[30];
    printf("Enter name: ");
    gets(name);     //Function to read string from user.
    printf("Name: ");
    puts(name);    //Function to display string.
    return 0;
}


</pre>



<b>Output:</b>
<br>
<pre>

Enter name: Tom Hanks
Name: Tom Hanks

</pre>
<br>



</p>
     
<h1>Passing Strings to Functions</h1> 
<p>
  String can be passed to function in similar manner as arrays as, string is also an array. Learn more about passing array to a function.<br><br>
  <pre>
#include < stdio.h>
void Display(char ch[]);
int main(){
    char c[50];
    printf("Enter string: ");
    gets(c);             
    Display(c);     // Passing string c to function.    
    return 0;
}
void Display(char ch[]){
    printf("String Output: ");
    puts(ch);
}
  </pre>
 <br><br>
 
  Here, string c is passed from main() function to user-defined function Display(). In function declaration, ch[] is the formal argument. <br>

  <br>

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