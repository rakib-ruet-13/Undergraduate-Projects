#include<windows.h>
#include <GL/glut.h>
#include <stdlib.h>
#include<bits/stdc++.h>

using namespace std;

/******** variables for moving characters ****/
float sun_cnt=.4;
int mom_cnt=0;
float megh_cnt=0;
int move_cnt=0;
float rotate_cnt=0;
int teach_cnt=11;
int stud_cnt=0;

float counter=0.0;

/********* declarations of functions that
 creates characters and background **********/

void circle();
void sun();
void sun2();
void janala();
void balish();
void khat();
void person1();
void person2();
void person3();
void background1();
void megh();
void mountain();
void river();
void tree();
void road();
void megh_float();
void sky();
void book();
void background2();
void scene1();
void scene2();
void school();
void uni_circle();
void flag();
void math();
void road_scene_3();
void gray_math();
void forest(float x,float y,float p,float q);
void background3();
void person1_back();
void scene3();
void mango_tree();
void mango();
void person2_back();
void scene4();
void background4();
void background5();
void eit();
void scene5();
void grass();
void person2_climb();
void background6();
void scene6();
void scene7();
void background7();
void teacher();
void teacher_back();
void rand_person(float a,float b,float c);
void rand_person_back(float a,float b,float c);
void board();
void empty_board();
void background7a();
void scene8();
void scene9();
void scene10();
void background10();
void throw_person_back(float a,float b,float c);
void background11();
void scene11();
void scene12();
void scene13();
void scene_last();
void bench();
void moral();
void background_last();




/***** display function that displays scenes**/
void display()
{
     scene1();
     scene2();
     scene3();
     scene4();
     scene5();
     scene6();
     scene7();
     scene8();
     scene9();
     scene10();
     scene11();
     scene12();
     scene13();
     scene_last();

}


/******* background and depth intialization *****/
 void init()
 {
     glClearColor(0.5,0.5,0.5,0.0);
     glEnable(GL_DEPTH_TEST);
     glDepthFunc(GL_LEQUAL);
 }


/****** reshape for camera set up *****/
 void reshape(int w,int h)
 {
    glViewport(0,0,w,h);
 }

/******* main function ****/
int main(int argc, char **argv)
{
    glutInit(&argc, argv);
    glutInitDisplayMode( GLUT_DOUBLE | GLUT_RGB);


    /***Window Creation***/
    glutInitWindowSize(1080,720);
    glutInitWindowPosition(0,0);
    glutCreateWindow("GLUT Shapes");
    init();


    glutDisplayFunc(display);
    glutIdleFunc(moral);
   //glutDisplayFunc(moral);
    glutReshapeFunc(reshape);

    glutMainLoop();
}


void moral()
{



    glBegin(GL_LINES);
    glLineWidth(10);
    glVertex3f(0,0,0);
    glVertex3f(0,.1,0);
    glVertex3f(0,.1,0);
    glVertex3f(.03,.14,0);
    glVertex3f(.03,.14,0);
    glVertex3f(.08,.12,0);

    glVertex3f(-.02,.1,0);
    glVertex3f(.02,.1,0);

    glVertex3f(.02,.1,0);
    glVertex3f(.07,.04,0);

    glVertex3f(.02,.04,0);
    glVertex3f(.07,.09,0);
    glVertex3f(.07,.09,0);
    glVertex3f(.1,.07,0);
    //glVertex3f(.1,.07,0);

    glVertex3f(.1,0,0);
    glVertex3f(.1,.1,0);

     glVertex3f(.2,.1,0);
    glVertex3f(.1,.1,0);

    glVertex3f(.12,.1,0);
    glVertex3f(.12,.06,0);

    glVertex3f(.12,.06,0);
    glVertex3f(.15,.06,0);

    glVertex3f(.15,.06,0);
    glVertex3f(.15,.01,0);

    glVertex3f(.15,.01,0);
    glVertex3f(.18,.01,0);

    glVertex3f(.18,.01,0);
    glVertex3f(.18,.1,0);

    glVertex3f(.16,.1,0);
    glVertex3f(.16,.07,0);
    glVertex3f(.16,.07,0);
    glVertex3f(.2,.07,0);

    glVertex3f(.2,.07,0);
    glVertex3f(.2,.02,0);

    glVertex3f(.2,.1,0);
    glVertex3f(.3,.1,0);

    glVertex3f(.22,.1,0);
    glVertex3f(.22,.0,0);

    glVertex3f(.25,.07,0);
    glVertex3f(.27,.1,0);

    glVertex3f(.27,.1,0);
    glVertex3f(.29,.07,0);

    glVertex3f(.29,.07,0);
    glVertex3f(.24,.03,0);

    glVertex3f(.24,.03,0);
    glVertex3f(.29,.00,0);

    glVertex3f(.27,.1,0);
    glVertex3f(.27,.12,0);

    glVertex3f(.27,.12,0);
    glVertex3f(.22,.12,0);

    glVertex3f(.22,.12,0);
    glVertex3f(.22,.14,0);

    glVertex3f(.40,.1,0);
    glVertex3f(.60,.1,0);

    glVertex3f(.50,.1,0);
    glVertex3f(.44,.05,0);

    glVertex3f(.44,.05,0);
    glVertex3f(.50,.00,0);

    glVertex3f(.50,.00,0);
    glVertex3f(.50,.10,0);

    glVertex3f(.53,.05,0);
    glVertex3f(.53,.08,0);

    glVertex3f(.53,.08,0);
    glVertex3f(.55,.08,0);

    glVertex3f(.55,.08,0);
    glVertex3f(.55,.06,0);

    glVertex3f(.55,.08,0);
    glVertex3f(.58,.08,0);

    glVertex3f(.58,.00,0);
    glVertex3f(.58,.1,0);
    glEnd();


}


void background_last()
{
    glLoadIdentity();
    glTranslatef(-0.25,.3,0);
    glScalef(.9,.9,1);
    empty_board();

    glLoadIdentity();
    glTranslatef(0,-.15,0);
    glScalef(1,1,1);
    bench();

     glLoadIdentity();
    glTranslatef(-.9,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.7,.1,.4);


    glLoadIdentity();
    glTranslatef(-.6,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.1,.1,.4);



    glLoadIdentity();
    glTranslatef(-.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,0,0);

    glLoadIdentity();
    glTranslatef(0,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,.5,0);

    glLoadIdentity();
    glTranslatef(.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.25,0,.25);


}


void scene_last()
{
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background_last();

    glColor3f(1,0,0);
     glLoadIdentity();
     glTranslatef(-.4,.5,0);
     glScalef(1.5,1.5,1);
    moral();
    glutSwapBuffers();

}

void scene13()
{
    float k=0;

     megh_cnt=0;


     for(k=.8; k>=-.17; k-=.0003)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;


     glLoadIdentity();
     glTranslatef(0+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(1,0,0);


     glLoadIdentity();
     glTranslatef(.10+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(0,0,1);

     glLoadIdentity();
     glTranslatef(.11+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glLoadIdentity();
     glTranslatef(.21+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glutSwapBuffers();
     }


     float q=0;

     float scale_fact=1;

     for(q=0; q<=.55; q+=.0003)
     {

        scale_fact-=.0003;
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;

     glLoadIdentity();
     glTranslatef(0+k+.15*(1-scale_fact),-.5+q,-1);
     glScalef(.4*scale_fact,.4*scale_fact,1);
     //glRotatef(27,1,1,0);
     person1_back();


      glLoadIdentity();
     glTranslatef(.10+k+.1*(1-scale_fact),-.5+q,-1);
     glScalef(.4*scale_fact,.4*scale_fact,1);
     //glRotatef(-27,1,1,0);
     person2_back();


      glutSwapBuffers();


     }
}

void throw_person_back(float a,float b,float c)
{
         float pp=0;
     if(stud_cnt%60==1)
    {
        pp=.02;
    }

    else if(stud_cnt%61==1)
    {
          pp=-.02;
    }


      glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.13,0);
    glVertex3f(.27+pp,-.10,0);
    glVertex3f(.38+pp,-.10,0);
    glVertex3f(.40+pp,-.13,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.27,0);
    glVertex3f(.33+pp,-.30,0);
    glVertex3f(.40+pp,-.27,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33+pp,-.29,0);
    glVertex3f(.33+pp,-.35,0);
    glEnd();

   // glLoadIdentity();

    glBegin(GL_POLYGON);
    glColor3f(a,b,c);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.25,0);

    glVertex3f(.43,-.25,0);
    glVertex3f(.41,-.15,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();



}

void scene12()
{

    int t=1000;
    while(t--)
    {
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
          glLoadIdentity();

        glBegin(GL_POLYGON);

        glColor3f(0,0,0);
        glVertex3f(-1,1,0);
        glVertex3f(1,1,0);
        glVertex3f(1,-1,0);
        glVertex3f(-1,-1,0);
        glEnd();

        glutSwapBuffers();

    }

    for(float i=0; i<=.7; i+=.0006)
    {
          glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
          glLoadIdentity();

        glBegin(GL_POLYGON);

        glColor3f(i,i,i);
        glVertex3f(-1,1,0);
        glVertex3f(1,1,0);
        glVertex3f(1,-1,0);
        glVertex3f(-1,-1,0);
        glEnd();

         glutSwapBuffers();

    }


     for(float p=.8; p>=0;p-=.0002)
    {


     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);


     background11();

     glLoadIdentity();
     glTranslatef(0,.85-p,0);
     glScalef(.7,1,0);
     circle();

    glColor3f(0,0,0);

       glLoadIdentity();
    glTranslatef(.5,.3,0);
    glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.3,.25,0);
     glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.06,.25,0);
     glTranslatef(0,-.5,0);
    mountain();

   glLoadIdentity();
    glTranslatef(-.0,.45,0);
     glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(-.12,.3,0);
     glTranslatef(0,-.5,0);
    mountain();

     glutSwapBuffers();
    }


    scene2();
}
void background11()
{


     glLoadIdentity();
     glScalef(1,2,1);
     glTranslatef(0,-.5,0);
     sky();



    megh_float();






     glLoadIdentity();
     glTranslatef(0,.1,0);
      glTranslatef(0,-.5,0);
     river();

     glLoadIdentity();
     glTranslatef(-.7,-.4,0);
      glTranslatef(0,-.5,0);
     tree();

       glLoadIdentity();
     glTranslatef(-.7,.3,0);
      glTranslatef(0,-.5,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.6,.35,0);
      glTranslatef(0,-.5,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.5,.3,0);
      glTranslatef(0,-.5,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.4,.35,0);
      glTranslatef(0,-.5,0);
     glScalef(.3,.3,.3);
     tree();

}

void scene11()
{

    for(float p=0; p<=.8;p+=.0002)
    {


     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);


     background11();

     glLoadIdentity();
     glTranslatef(0,.85-p,0);
     glScalef(.7,1,0);
     circle();

    glColor3f(0,0,0);

       glLoadIdentity();
    glTranslatef(.5,.3,0);
    glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.3,.25,0);
     glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.06,.25,0);
     glTranslatef(0,-.5,0);
    mountain();

   glLoadIdentity();
    glTranslatef(-.0,.45,0);
     glTranslatef(0,-.5,0);
    mountain();

    glLoadIdentity();
    glTranslatef(-.12,.3,0);
     glTranslatef(0,-.5,0);
    mountain();

     glutSwapBuffers();
    }



    for(float i=.7; i>=0; i-=.0006)
    {
          glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
          glLoadIdentity();

        glBegin(GL_POLYGON);

        glColor3f(i,i,i);
        glVertex3f(-1,1,0);
        glVertex3f(1,1,0);
        glVertex3f(1,-1,0);
        glVertex3f(-1,-1,0);
        glEnd();

         glutSwapBuffers();

    }

    int t=1000;
    while(t--)
    {
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
          glLoadIdentity();

        glBegin(GL_POLYGON);

        glColor3f(0,0,0);
        glVertex3f(-1,1,0);
        glVertex3f(1,1,0);
        glVertex3f(1,-1,0);
        glVertex3f(-1,-1,0);
        glEnd();

        glutSwapBuffers();

    }




}


void background10()
{

       glLoadIdentity();
    grass();

    glLoadIdentity();
    glTranslatef(-.3,-.1,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.32,-.12,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.34,-.08,0);
    glScalef(.2,.2,.2);
    eit();

      glLoadIdentity();
    glTranslatef(.0,.0,0);
    glScalef(1,1,1);
    mango_tree();





}
void scene10()
{








     float u=2.5;
     float x,y;

    for(x=0; x<=.52 ; x+=.0003)
    {

        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background10();

     glLoadIdentity();
    glTranslatef(-.7,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(0,0,1);



     glLoadIdentity();
    glTranslatef(-.55,-.3,0);
    glScalef(.5,.5,.5);
    throw_person_back(1,0,0);

    glLoadIdentity();
    glTranslatef(.2,.12,0);
    glScalef(.25,.25,.4);
    mango();

    y=x*tan(3.1416/3.0)-(.5*9.8*x*x)/(2*u*u*cos(3.1416/4.0)*cos(3.1416/3.0));




    glLoadIdentity();
    glTranslatef(-.32+x,-.38+y,0);
    glScalef(.2,.2,.2);
    eit();

     glutSwapBuffers();
    }

    float k=0;

    for(k=0; k<=.70; k+=.001)
    {

    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background10();

     glLoadIdentity();
    glTranslatef(-.7,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(0,0,1);



     glLoadIdentity();
    glTranslatef(-.55,-.3,0);
    glScalef(.5,.5,.5);
    throw_person_back(1,0,0);

    glLoadIdentity();
    glTranslatef(.2,.12-k,0);
    glScalef(.25,.25,.4);
    mango();

    glutSwapBuffers();


    }


    float kk=0;
     for(kk=0; kk<=.68; kk+=.0003)
    {
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background10();

      glLoadIdentity();
    glTranslatef(.2,.12-k,0);
    glScalef(.25,.25,.4);
    mango();

     glLoadIdentity();
    glTranslatef(-.7+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(0,0,1);



     glLoadIdentity();
    glTranslatef(-.55+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(1,0,0);



    glutSwapBuffers();

    }


    int ppp=1000;

    while(ppp--)
    {

        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background10();

      glLoadIdentity();
    glTranslatef(.2,.12-k,0);
    glScalef(.25,.25,.4);
    mango();

     glLoadIdentity();
    glTranslatef(-.7+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(0,0,1);



     glLoadIdentity();
    glTranslatef(-.55+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person_back(1,0,0);



    glutSwapBuffers();



    }



     for(kk=.68; kk<=1.7; kk+=.0003)
    {
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
       background10();



     glLoadIdentity();
    glTranslatef(-.7+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person(0,0,1);



     glLoadIdentity();
    glTranslatef(-.55+kk,-.3,0);
    glScalef(.5,.5,.5);
    rand_person(1,0,0);



    glutSwapBuffers();


    }




}

void scene9()
{

      float k=0;
     for(k=0; k<=.6; k+=.0003)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

     int t=1000;
     while(t--)
     {
           glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

     float k2=0;

     for(k2=0; k2<=.1; k2+=.0002)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();

     }

     float k3=0;
     for(k3=0; k3<=.6; k3+=.001)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

      int t1=300;
     while(t1--)
     {
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();

     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);

     glRotatef(-rotate_cnt,-1,0,0);

     person2_climb();
     rotate_cnt+=.007;

     glutSwapBuffers();
     }






     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     glRotatef(-rotate_cnt,-1,0,0);
     person2_climb();
     rotate_cnt+=.007;

     float ss;

     for(ss=0;ss<=1;ss+=.0003)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     glRotatef(-rotate_cnt,-1,0,0);
     person2_climb();
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45,0);
     glScalef(.33,.33,.4);
     rand_person(1,0,0);
     glutSwapBuffers();
     }

     t=2000;
     while(t--)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);
     glutSwapBuffers();

     stud_cnt++;

     }

      t=1000;
     while(t--)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();






     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);

     glLoadIdentity();
     glTranslatef(-.11+k2+.27,-.25+k-k3-.24,0);
     glScalef(.90,.90,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     megh();

      glLoadIdentity();
     glTranslatef(-.11+k2+.24,-.25+k-k3-.23,0);
     glScalef(.07,.07,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     board();

     glutSwapBuffers();

     stud_cnt++;

     }

     stud_cnt=0;
     for( ;ss<=1.4;ss+=.0003)
     {
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);
     glutSwapBuffers();

     }


     float tt=0;
     for(tt=0; tt<=.6; tt+=.0002)
     {
          glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45+tt,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);
     glutSwapBuffers();

     }

      t=1000;
     while(t--)
     {
           glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45+tt,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);


     glutSwapBuffers();

     }

      float tt2=0;
     for(tt2=0; tt2<=.6; tt2+=.0002)
     {
          glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss,-.45+tt-tt2,0);
     glScalef(.33,.33,.4);
     rand_person(1,0,0);

       glLoadIdentity();
    glTranslatef(-.32,-.08-tt2,0);
    glScalef(.2,.2,.2);
    eit();


     glutSwapBuffers();

     }

     float l=0;
     for(l=0; l<=.4; l+=.0002)
     {
             glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();
     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     //glRotatef(-rotate_cnt,-1,0,0);
     rand_person(0,0,1);
     rotate_cnt+=.007;
     glLoadIdentity();
     glTranslatef(1-ss+l,-.45+tt-tt2,0);
     glScalef(.33,.33,.4);
     rand_person_back(1,0,0);

       glLoadIdentity();
    glTranslatef(-.32+l,-.08-tt2,0);
    glScalef(.2,.2,.2);
    eit();


     glutSwapBuffers();


     }




}


void scene8()
{

     float k=-.35;
     float kk=.035;

     megh_cnt=0;


     for( ; k>=-1.05 ; k-=.0002)
     {
          megh_cnt+=.00005;



     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
      glLoadIdentity();
     background3();

    glLoadIdentity();
    glTranslatef(-.07+kk,.45+k,0);
    glScalef(.2,.2,.2);
    rand_person(.7,.1,.4);


    glLoadIdentity();
    glTranslatef(-.12+kk,.45+k,0);
    glScalef(.2,.2,.2);
    rand_person(.1,.1,.4);



    glLoadIdentity();
    glTranslatef(-.05+kk,.4+k,0);
     glScalef(.2,.2,.2);
    rand_person(1,0,0);

    glLoadIdentity();
    glTranslatef(-.1+kk,.4+k,0);
    glScalef(.2,.2,.2);
    rand_person(1,.5,0);

    glLoadIdentity();
    glTranslatef(-.15+kk,.4+k,0);
    glScalef(.2,.2,.2);
    rand_person(.25,0,.25);




     glutSwapBuffers();
     }



     for( ; kk>=-1.05 ; kk-=.0002)
     {

     megh_cnt+=.00005;


     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

    glLoadIdentity();
    glTranslatef(-.07+kk,.45+k,0);
    glScalef(.2,.2,.2);
    rand_person(.7,.1,.4);


    glLoadIdentity();
    glTranslatef(-.12+kk,.45+k,0);
    glScalef(.2,.2,.2);
    rand_person(.1,.1,.4);



    glLoadIdentity();
    glTranslatef(-.05+kk,.4+k,0);
     glScalef(.2,.2,.2);
    rand_person(1,0,0);

    glLoadIdentity();
    glTranslatef(-.1+kk,.4+k,0);
    glScalef(.2,.2,.2);
    rand_person(1,.5,0);

    glLoadIdentity();
    glTranslatef(-.15+kk,.4+k,0);
    glScalef(.2,.2,.2);
    rand_person(.25,0,.25);




     glutSwapBuffers();
     }

     megh_cnt=0;






}
void rand_person(float a,float b,float c)
{

    float pp=0;
     if(stud_cnt%60==1)
    {
        pp=.01;
    }

    else if(stud_cnt%61==1)
    {
          pp=-.01;
    }


     glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.13,0);
    glVertex3f(.27+pp,-.10,0);
    glVertex3f(.38+pp,-.10,0);
    glVertex3f(.40+pp,-.13,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,.8,.5);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.27,0);
    glVertex3f(.33+pp,-.30,0);
    glVertex3f(.40+pp,-.27,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();



    glPointSize(2);
    glBegin(GL_POINTS);
    glColor3f(0,0,0);
    glVertex3f(.30+pp,-.17,0);
    glVertex3f(.35+pp,-.17,0);
    glEnd();

    glLineWidth(2);
    glBegin(GL_LINES);
    glVertex3f(.33+pp,-.20,0);
    glVertex3f(.33+pp,-.25,0);
    glEnd();

     glLineWidth(2);
    glBegin(GL_LINES);

    glColor3f(1,0,0);
    glVertex3f(.30+pp,-.27,0);
    glVertex3f(.33+pp,-.28,0);

    glVertex3f(.33+pp,-.28,0);
    glVertex3f(.36+pp,-.27,0);
    glEnd();

    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33+pp,-.29,0);
    glVertex3f(.33+pp,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(a,b,c);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();

}
void rand_person_back(float a,float b,float c)
{

        float pp=0;
     if(stud_cnt%60==1)
    {
        pp=.02;
    }

    else if(stud_cnt%61==1)
    {
          pp=-.02;
    }


      glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.13,0);
    glVertex3f(.27+pp,-.10,0);
    glVertex3f(.38+pp,-.10,0);
    glVertex3f(.40+pp,-.13,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.27,0);
    glVertex3f(.33+pp,-.30,0);
    glVertex3f(.40+pp,-.27,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33+pp,-.29,0);
    glVertex3f(.33+pp,-.35,0);
    glEnd();

   // glLoadIdentity();

    glBegin(GL_POLYGON);
    glColor3f(a,b,c);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();


}

void teacher()
{


     float pp=0;
     if(teach_cnt%40==1)
    {
        pp=.01;
    }

    else if(teach_cnt%41==1)
    {
          pp=-.01;
    }


     glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.13,0);
    glVertex3f(.27+pp,-.10,0);
    glVertex3f(.38+pp,-.10,0);
    glVertex3f(.40+pp,-.13,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,.8,.5);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.27,0);
    glVertex3f(.33+pp,-.30,0);
    glVertex3f(.40+pp,-.27,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();



    glPointSize(7);
    glBegin(GL_POINTS);
    glColor3f(0,0,0);
    glVertex3f(.30+pp,-.17,0);
    glVertex3f(.35+pp,-.17,0);
    glEnd();

    glLineWidth(10);
    glBegin(GL_LINES);
    glVertex3f(.33+pp,-.20,0);
    glVertex3f(.33+pp,-.25,0);
    glEnd();

     glLineWidth(5);
    glBegin(GL_LINES);

    glColor3f(1,0,0);
    glVertex3f(.30+pp,-.27,0);
    glVertex3f(.33+pp,-.28,0);

    glVertex3f(.33+pp,-.28,0);
    glVertex3f(.36+pp,-.27,0);
    glEnd();

    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33+pp,-.29,0);
    glVertex3f(.33+pp,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(.2,.2,.2);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();


}
void teacher_back()
{

    float pp=0;
     if(teach_cnt%40==1)
    {
        pp=.01;
    }

    else if(teach_cnt%41==1)
    {
          pp=-.01;
    }


      glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.13,0);
    glVertex3f(.27+pp,-.10,0);
    glVertex3f(.38+pp,-.10,0);
    glVertex3f(.40+pp,-.13,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25+pp,-.15,0);
    glVertex3f(.25+pp,-.27,0);
    glVertex3f(.33+pp,-.30,0);
    glVertex3f(.40+pp,-.27,0);
    glVertex3f(.40+pp,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33+pp,-.29,0);
    glVertex3f(.33+pp,-.35,0);
    glEnd();



    glBegin(GL_POLYGON);
    glColor3f(.2,.2,.2);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();


}
void board()
{
    glBegin(GL_POLYGON);
    glColor3f(1,1,1);
    glVertex3f(.9,-.6,0);
    glVertex3f(.9,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,-.6,0);
    glEnd();
    glLineWidth(3);
    glBegin(GL_LINES);
    glColor3f(0,0,0);
    glVertex3f(.9,-.6,0);
    glVertex3f(.9,.7,0);
    glVertex3f(.9,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,-.6,0);
    glVertex3f(-.3,-.6,0);
    glVertex3f(.9,-.6,0);

    glEnd();

    float x,y,u;
    u=1.5;

    glColor3f(0,0,0);
    glBegin(GL_POINTS);


    for(x=0; x<=.55 ; x+=.001)
    {
        y=x*tan(3.1416/3.0)-(.5*9.8*x*x)/(2*u*u*cos(3.1416/4.0)*cos(3.1416/3.0));

        glVertex3f(x,y,0);

    }
    glEnd();


    glPointSize(9);
    glBegin(GL_POINTS);
    glVertex3f(0,0,0);
    glEnd();

    glPointSize(1);

    glLineWidth(3);
    glBegin(GL_LINES);
    glVertex3f(0,0,0);
    glVertex3f(0,.6,0);
    glEnd();

    glBegin(GL_LINES);
    glVertex3f(0,0,0);
    glVertex3f(.7,0,0);
    glEnd();

     glBegin(GL_LINES);
    glVertex3f(0,0,0);
    glVertex3f(.4,.6,0);
    glEnd();

    glLineWidth(3);
     glBegin(GL_LINES);
    glVertex3f(.1,-.3,0);
    glVertex3f(.1,-.4,0);

    glVertex3f(.1,-.4,0);
    glVertex3f(.15,-.35,0);

    glVertex3f(.1,-.3,0);
    glVertex3f(.15,-.35,0);

    glVertex3f(.15,-.3,0);
    glVertex3f(.15,-.45,0);

    glVertex3f(.15,-.45,0);
    glVertex3f(.13,-.43,0);

    glVertex3f(.13,-.43,0);
    glVertex3f(.1,-.45,0);

    glVertex3f(.15,-.3,0);
    glVertex3f(.30,-.3,0);

    glVertex3f(.17,-.3,0);
    glVertex3f(.17,-.45,0);

    glVertex3f(.19,-.3,0);
    glVertex3f(.22,-.37,0);
    glVertex3f(.22,-.37,0);
    glVertex3f(.19,-.40,0);

    glVertex3f(.22,-.37,0);
    glVertex3f(.25,-.37,0);

    glVertex3f(.25,-.30,0);
    glVertex3f(.25,-.45,0);

    glEnd();

    glLineWidth(1);
    glPointSize(1);

}


void empty_board()
{
     glBegin(GL_POLYGON);
    glColor3f(1,1,1);
    glVertex3f(.9,-.6,0);
    glVertex3f(.9,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,-.6,0);
    glEnd();
    glLineWidth(3);
    glBegin(GL_LINES);
    glColor3f(0,0,0);
    glVertex3f(.9,-.6,0);
    glVertex3f(.9,.7,0);
    glVertex3f(.9,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,.7,0);
    glVertex3f(-.3,-.6,0);
    glVertex3f(-.3,-.6,0);
    glVertex3f(.9,-.6,0);

    glEnd();

}
void bench()
{
       glBegin(GL_POLYGON);
    glColor3f(.6,0,0);
    glVertex3f(-1,-.7,0);
    glVertex3f(.9,-.7,0);
    glVertex3f(1,-.6,0);
    glVertex3f(-.9,-.6,0);

    glEnd();

      glBegin(GL_POLYGON);
    glColor3f(.3,0,0);

    glVertex3f(.9,-.7,0);
    glVertex3f(1,-.6,0);
    glVertex3f(1,-.8,0);
    glVertex3f(.9,-.9,0);


    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(0,0,0);


    glVertex3f(-1,-.9,0);

    glVertex3f(.9,-.9,0);
    glVertex3f(.9,-.7,0);
    glVertex3f(-1,-.7,0);



    glEnd();




}
void background7()
{


    glLoadIdentity();
    glTranslatef(.3,.3,0);
    glScalef(.7,.7,1);
    empty_board();

    glLoadIdentity();
    glTranslatef(0,-.15,0);
    glScalef(1,1,1);
    bench();

    glLoadIdentity();
    glTranslatef(-.9,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.7,.1,.4);


    glLoadIdentity();
    glTranslatef(-.6,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.1,.1,.4);



    glLoadIdentity();
    glTranslatef(-.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,0,0);

    glLoadIdentity();
    glTranslatef(0,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,.5,0);

    glLoadIdentity();
    glTranslatef(.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.25,0,.25);



}

void background7a()
{


    glLoadIdentity();
    glTranslatef(.3,.3,0);
    glScalef(.7,.7,1);
    board();

    glLoadIdentity();
    glTranslatef(0,-.15,0);
    glScalef(1,1,1);
    bench();

    glLoadIdentity();
    glTranslatef(-.9,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.7,.1,.4);


    glLoadIdentity();
    glTranslatef(-.6,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.1,.1,.4);



    glLoadIdentity();
    glTranslatef(-.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,0,0);

    glLoadIdentity();
    glTranslatef(0,-.3,0);
    glScalef(1,1,1);
    rand_person_back(1,.5,0);

    glLoadIdentity();
    glTranslatef(.3,-.3,0);
    glScalef(1,1,1);
    rand_person_back(.25,0,.25);



}
void scene7()
{

    for(int i=1; i<=3000;i++)
    {

    teach_cnt++;
    stud_cnt++;
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background7();
    glLoadIdentity();
    glTranslatef(-.6,.65,0);
    glScalef(1,1,1);
    teacher();

    glutSwapBuffers();
    }

    teach_cnt=0;
    stud_cnt=0;


    float k1=0;

    for(k1=0; k1<=.6; k1+=.0003)
    {
    //teach_cnt++;

    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    background7();
    glLoadIdentity();
    glTranslatef(-.6+k1,.65,0);
    glScalef(1,1,1);
    teacher_back();

    glutSwapBuffers();

    }

     for(int i=1; i<=2000;i++)
    {

        teach_cnt++;
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
         background7();
         glLoadIdentity();
         glTranslatef(-.6+k1,.65,0);
         glScalef(1,1,1);
         teacher_back();

          glutSwapBuffers();
    }

     teach_cnt=0;

     float k2=0;
         for(k2=0; k2<=.6; k2+=.0003)
    {
    //teach_cnt++;

    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    glLoadIdentity();
    background7a();
    glLoadIdentity();
    glTranslatef(-.6+k1-k2,.65,0);
    glScalef(1,1,1);
    teacher_back();

    glutSwapBuffers();

    }

     for(int i=1; i<=3000;i++)
    {

    teach_cnt++;
    stud_cnt++;
    glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
    glLoadIdentity();
    background7a();
    glLoadIdentity();
    glTranslatef(-.6,.65,0);
    glScalef(1,1,1);
    teacher();

    glutSwapBuffers();
    }




}


void person2_climb()
{
     glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

        glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.39,-.70,0);
    glVertex3f(.42,-.60,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.23,-.60,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(0,0,1);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.25,0);

    glVertex3f(.22,-.25,0);
    glVertex3f(.24,-.15,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.25,0);

    glVertex3f(.43,-.25,0);
    glVertex3f(.41,-.15,0);
    glEnd();

    /***legs****/



}



void background6()
{
        glLoadIdentity();
    grass();

    glLoadIdentity();
    glTranslatef(-.3,-.1,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.32,-.12,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.34,-.08,0);
    glScalef(.2,.2,.2);
    eit();

      glLoadIdentity();
    glTranslatef(.0,.0,0);
    glScalef(1,1,1);
    mango_tree();

    glLoadIdentity();
    glTranslatef(.2,.12,0);
    glScalef(.25,.25,.4);
    mango();



}


void scene6()
{

     float k=0;
     for(k=0; k<=.6; k+=.0003)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

     int t=1000;
     while(t--)
     {
           glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

     float k2=0;

     for(k2=0; k2<=.1; k2+=.0001)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();

     }

     float k3=0;
     for(k3=0; k3<=.6; k3+=.001)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();
     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);
     person2_climb();

     glutSwapBuffers();
     }

      int t1=600;
     while(t1--)
     {
         glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background6();

     glLoadIdentity();

     glTranslatef(-.11+k2,-.25+k-k3,0);
     glScalef(.33,.33,.4);

     glRotatef(-rotate_cnt,-1,0,0);

     person2_climb();
     rotate_cnt+=.007;

     glutSwapBuffers();
     }




}

void scene5()
{


     float k;
     for(k=0; k<=.4; k+=.0003)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background5();

     glLoadIdentity();
     glTranslatef(.13+k*.2,-.4+k,0);
     glScalef(.5*(1-k),.5*(1-k),.5*(1-k));
     person2_back();

     glutSwapBuffers();
     }

     int l=1000;
     while(l--)
     {
       glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
       background5();

         glLoadIdentity();
         glTranslatef(.13+k*.2,-.4+k,0);
         glScalef(.5*(1-k),.5*(1-k),.5*(1-k));
         person2_back();

     glutSwapBuffers();
     }
}



void grass()
{
    glColor3f(0,.93,.3);
    glBegin(GL_POLYGON);

    glVertex3f(-1,0,0);
    glVertex3f(-.75,.2,0);
    glVertex3f(-.5,.1,0);
    glVertex3f(-.2,.25,0);
    glVertex3f(-.0,.35,0);
    glVertex3f(.25,.1,0);
    glVertex3f(.5,.25,0);
    glVertex3f(.75,.1,0);
    glVertex3f(1,0,0);
    glEnd();

}

void eit()
{

    glColor3f(.9,.4,.2);
    glBegin(GL_POLYGON);

    glVertex3f(-.1,0,0);
    glVertex3f(.15,0,0);
    glVertex3f(0,.2,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(.7,.4,.2);
    glVertex3f(-.1,0,0);
    glVertex3f(-.15,.05,0);
    glVertex3f(0,.2,0);
    glEnd();

}
void background5()
{

    glLoadIdentity();
    sky();

    glLoadIdentity();
    sun2();

    glLoadIdentity();
    megh_float();

    glLoadIdentity();
    grass();

    glLoadIdentity();
    glTranslatef(-.3,-.1,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.32,-.12,0);
    glScalef(.2,.2,.2);
    eit();

    glLoadIdentity();
    glTranslatef(-.34,-.08,0);
    glScalef(.2,.2,.2);
    eit();

       glLoadIdentity();
    glColor3f(.9,.5,.1);
    glBegin(GL_POLYGON);
    glVertex3f(-1,-0.6,0);
    glVertex3f(1,-0.6,0);
    glVertex3f(1,-0.9,0);
    glVertex3f(-1,-0.9,0);
    glEnd();


      glLoadIdentity();
    glTranslatef(.3,.2,0);
    glScalef(.8,.8,.8);
    mango_tree();

    glLoadIdentity();
    glTranslatef(.5,.29,0);
    glScalef(.25,.25,.4);
    mango();



}



void person2_back()
{
      glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(0,0,1);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();

}


void background4()
{

    glLoadIdentity();
    glScalef(1,1,1);
    sky();



    glLoadIdentity();
    glScalef(1,1,1);
    sun2();

    glLoadIdentity();
    glScalef(1,1,1);
    megh_float();

    glLoadIdentity();

    glTranslatef(.3,.2,0);
    glScalef(.4,.4,.4);
    forest(1,1,1,1);

    glLoadIdentity();
    glColor3f(.9,.5,.1);
    glBegin(GL_POLYGON);
    glVertex3f(-1,-1,0);
    glVertex3f(-1,-0.8,0);
    glVertex3f(1,.3,0);
    glVertex3f(1,0.1,0);
    glEnd();


    glLoadIdentity();

    glTranslatef(.3,.2,0);
    glScalef(.4,.4,.4);
    mango_tree();

    glLoadIdentity();

    glTranslatef(.4,.25,0);
    glScalef(.1,.1,.1);
    mango();

}
void scene4()
{

    float k;
    for(k=-1; k<=.3 ; k+=.0003)
     {



     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background4();

     megh_cnt+=.00007;

     glLoadIdentity();
     glTranslatef(0+k,.57*k+.05,0);
     glScalef(.4,.4,1);
     person2_back();

     glutSwapBuffers();
     }


     int p=2000;
     while(p--)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background4();

     megh_cnt+=.00007;

     glLoadIdentity();
     glTranslatef(0+k,.57*k+.05,0);
     glScalef(.4,.4,1);
     person2_back();
     glutSwapBuffers();
     }



}
void mango()
{

    glBegin(GL_POLYGON);
    glColor3f(1,1,0);
    float x,y;
     for(float i=0;i<=.1; i+=.001)
    {
        x=i;
        y=sqrt(.01-x*x);

        swap(x,y);

        glVertex3f(x,y*1.7,0);
        glVertex3f(x,-y*1.7,0);
        glVertex3f(-x,-y*1.7,0);
        glVertex3f(-x,y*1.7,0);
    }
     glEnd();


      glColor3f(.7,.33,0);

     glBegin(GL_POLYGON);

     glVertex3f(0.01,.16,0);
     glVertex3f(0.01,.37,0);
     glVertex3f(-0.01,.37,0);
     glVertex3f(-0.01,.16,0);



     glEnd();
     glBegin(GL_POLYGON);
     glVertex3f(0.01,.24,0);
     glVertex3f(0.01,.26,0);
     glVertex3f(0.18,.26,0);
     glVertex3f(0.18,.24,0);
     glEnd();

     glColor3f(0,1,0);
     glBegin(GL_POLYGON);

     glVertex3f(0.14,.25,0);
     glVertex3f(0.28,.32,0);
     glVertex3f(0.32,.33,0);
     glVertex3f(0.38,.33,0);
     glVertex3f(0.50,.25,0);
     glEnd();

     glBegin(GL_POLYGON);

     glVertex3f(0.14,.25,0);
     glVertex3f(0.28,.18,0);
     glVertex3f(0.32,.17,0);
     glVertex3f(0.38,.17,0);
     glVertex3f(0.50,.25,0);
     glEnd();





}

void mango_tree()
{
    glColor3f(.5,.3,.2);

    glBegin(GL_POLYGON);
    glVertex3f(-.05,-.5,0);
    glVertex3f(.05,-.5,0);
    glVertex3f(.05,.3,0);
    glVertex3f(-.05,.3,0);
    glEnd();

    glBegin(GL_POLYGON);

    glVertex3f(.05,.3,0);
    glVertex3f(.1,.325,0);
    glVertex3f(.05,.325,0);
    glVertex3f(0,.35,0);
    glVertex3f(-.05,.325,0);
    glVertex3f(-.1,.325,0);
    glVertex3f(-.05,.3,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.05,.3,0);
    glVertex3f(.05,.2,0);
    glVertex3f(.05,.22,0);
    glVertex3f(.4,.22,0);
    glVertex3f(.4,.2,0);
    glEnd();


    glBegin(GL_POLYGON);
    glColor3f(.2,1,.2);

    glVertex3f(-.1,.325,0);
    glVertex3f(-.05,.325,0);
    glVertex3f(-0,.35,0);
    glVertex3f(-0,.92,0);
    glVertex3f(-.2,.87,0);
    glVertex3f(-.3,.75,0);
    glVertex3f(-.37,.75,0);
    glVertex3f(-.40,.60,0);
    glVertex3f(-.36,.50,0);
    glVertex3f(-.40,.40,0);
    glVertex3f(-.30,.30,0);
    glVertex3f(-.25,.25,0);

    glEnd();


    glBegin(GL_POLYGON);
    glColor3f(.2,1,.2);

    glVertex3f(.1,.325,0);
    glVertex3f(.05,.325,0);
    glVertex3f(0,.35,0);
    glVertex3f(0,.92,0);
    glVertex3f(.2,.87,0);
    glVertex3f(.3,.75,0);
    glVertex3f(.37,.75,0);
    glVertex3f(.40,.60,0);
    glVertex3f(.36,.50,0);
    glVertex3f(.40,.40,0);
    glVertex3f(.30,.30,0);
    glVertex3f(.25,.25,0);


    glEnd();


    glBegin(GL_POLYGON);
    glColor3f(.2,1,.2);

    glVertex3f(.4,.2,0);
    glVertex3f(.4,.22,0);
    glVertex3f(.38,.18,0);
    glVertex3f(.41,.16,0);
    glVertex3f(.50,.12,0);
    glVertex3f(.58,.18,0);
    glVertex3f(.58,.27,0);
    glVertex3f(.50,.35,0);
    glVertex3f(.41,.32,0);
    glVertex3f(.38,.27,0);



    glEnd();



}
void person1_back()
{
         /********person1******/
    //glLoadIdentity();
    glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();





    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,0,0);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();


}


void scene3()
{

     float k=0;

     megh_cnt=0;


     for(k=.8; k>=-.15; k-=.0003)
     {

     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;


     glLoadIdentity();
     glTranslatef(0+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(1,0,0);


     glLoadIdentity();
     glTranslatef(.10+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(0,0,1);

     glLoadIdentity();
     glTranslatef(.11+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glLoadIdentity();
     glTranslatef(.21+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glutSwapBuffers();
     }


     int p=2000;
     while(p--)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;

     glLoadIdentity();
     glTranslatef(0+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(1,0,0);


     glLoadIdentity();
     glTranslatef(.10+k,-.5,0);
     glScalef(.4,.4,1);
     rand_person(0,0,1);

     glLoadIdentity();
     glTranslatef(.11+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glLoadIdentity();
     glTranslatef(.21+k,-.72,0);
     glScalef(.5,.5,1);
     book();

     glutSwapBuffers();
     }

     float q=0;

     float scale_fact=1;

     for(q=0; q<=.55; q+=.0003)
     {

        scale_fact-=.0003;
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;

      glLoadIdentity();
     glTranslatef(.10+k-q,-.5,0);
     glScalef(.4,.4,1);
     rand_person(0,0,1);

     glLoadIdentity();
     glTranslatef(0+k+.2*(1-scale_fact),-.5+q,-1);
     glScalef(.4*scale_fact,.4*scale_fact,1);
     glRotatef(-27,1,1,0);
     rand_person_back(1,0,0);



     glLoadIdentity();
     glTranslatef(.21+k-q,-.72,0);
     glScalef(.5,.5,1);
     book();

      glutSwapBuffers();


     }

     float v=0;
       for(v=0; v<=.55; v+=.0003)
     {

        scale_fact-=.0003;
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     background3();

     megh_cnt+=.00007;


     glLoadIdentity();
     glTranslatef(.10+k-q-v,-.5,0);
     glScalef(.4,.4,1);
     rand_person(0,0,1);


     glLoadIdentity();
     glTranslatef(.21+k-q-v,-.72,0);
     glScalef(.5,.5,1);
     book();

      glutSwapBuffers();


     }

}

void background3()
{


     glLoadIdentity();
    sky();
    glLoadIdentity();
    sun2();
    megh_float();

    glLoadIdentity();
    road_scene_3();

     glLoadIdentity();
     math();

     glLoadIdentity();
     glTranslatef(0,0,0);
     glScalef(.5,.5,.5);
     school();

     glLoadIdentity();
     glTranslatef(-0,.4,0);
     glScalef(.3,.3,.3);
     school();

     glLoadIdentity();
     glTranslatef(-.2,.6,0);
     glScalef(.25,.25,1);
     flag();


     glLoadIdentity();
     forest(-.3,0,.5,.5);




}


void forest(float x,float y,float p,float q)
{

    glLoadIdentity();
    glTranslatef(-.8,.2,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.7,.3,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.65,.4,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.5,.4,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.6,.3,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.7,.3,0);
    glScalef(.3,.3,0);
    tree();

     glLoadIdentity();
    glTranslatef(-.8,.4,0);
    glScalef(.3,.3,0);
    tree();


}

void gray_math()
{
    glColor3f(1,.7,.5);
    glBegin(GL_POLYGON);
    glVertex3f(-0.5,0,0);
    glVertex3f(0.5,0,0);
    glVertex3f(0.3,.38,0);
    glVertex3f(-0.3,.38,0);
    glEnd();

}
void math()
{
    glColor3f(0,1,0);
    glBegin(GL_POLYGON);
    glVertex3f(-0.5,0,0);
    glVertex3f(0.5,0,0);
    glVertex3f(0.3,.38,0);
    glVertex3f(-0.3,.38,0);
    glEnd();

}

void road_scene_3()
{
    glColor3f(.9,.5,.1);
    glBegin(GL_POLYGON);
    glVertex3f(-1,-0.7,0);
    glVertex3f(1,-0.7,0);
    glVertex3f(1,-0.9,0);
    glVertex3f(-1,-0.9,0);
    glEnd();

     glBegin(GL_POLYGON);
    glVertex3f(-0.1,-0.7,0);
    glVertex3f(0.1,-0.7,0);
    glVertex3f(.06,0,0);
    glVertex3f(-.06,0,0);
    glEnd();
}

void flag()
{
    glBegin(GL_POLYGON);
    glColor3f(0,1,0);
    glVertex3f(-.2,-.15,0);
    glVertex3f(.2,-.15,0);
    glVertex3f(.2,.15,0);
    glVertex3f(-.2,.15,0);
    glEnd();

    glColor3f(1,0,0);
    uni_circle();


    glLineWidth(5);
    glColor3f(0,0,0);
    glBegin(GL_LINES);
    glVertex3f(-.2,.17,0);
    glVertex3f(-.2,-.9,0);


    glEnd();

    glLineWidth(1);
}

void uni_circle()
{
    glBegin(GL_POLYGON);
    float x,y;
     for(float i=0;i<=.1; i+=.001)
    {
        x=i;
        y=sqrt(.01-x*x);
        glVertex3f(x,y,0);
        glVertex3f(x,-y,0);
        glVertex3f(-x,-y,0);
        glVertex3f(-x,y,0);
    }
     glEnd();
}
void school()
{
    glBegin(GL_POLYGON);
    glColor3f(1,1,.33);
    glVertex3f(.5,0,0);
    glVertex3f(.5,.3,0);
    glVertex3f(-.5,.3,0);
    glVertex3f(-.5,0,0);
    glEnd();



    glLineWidth(2);
    glColor3f(0,0,.03);
    glBegin(GL_LINES);
    glVertex3f(.17,0,0);
    glVertex3f(.17,.3,0);
    glVertex3f(-.17,.3,0);
    glVertex3f(-.17,0,0);
    glEnd();


    glBegin(GL_POLYGON);
    glColor3f(.33,0,0);
    glVertex3f(.05,0,0);
    glVertex3f(.05,.2,0);
    glVertex3f(-.05,.2,0);
    glVertex3f(-.05,0,0);
    glEnd();


    glBegin(GL_POLYGON);
    glColor3f(.33,0,0);
    glVertex3f(.28,0,0);
    glVertex3f(.28,.2,0);
    glVertex3f(.38,.2,0);
    glVertex3f(.38,0,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(.33,.33,0);
    glVertex3f(.53,0,0);
    glVertex3f(.53,-.1,0);
    glVertex3f(-.53,-.1,0);
    glVertex3f(-.53,0,0);
    glEnd();

     glBegin(GL_POLYGON);
    glColor3f(1,.66,.22);
    glVertex3f(-.53,.3,0);
    glVertex3f(-.17,.3,0);
    glVertex3f(-.33,.45,0);

    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(.3,.1,.22);
    glVertex3f(-.17,.3,0);
    glVertex3f(-.33,.45,0);
    glVertex3f(.33,.45,0);
    glVertex3f(.5,.30,0);

    glEnd();



}

void scene1()
{
    for(sun_cnt=.2; sun_cnt>=-.2; sun_cnt-=.0001)
     {
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

     background1();
     glLoadIdentity();
     sun();

     glutSwapBuffers();
     }


     for(float i=1; i>=-.05; i-=.0003)
     {
          glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
          background1();

          glLoadIdentity();
          glTranslatef(i,0,0);
          //glRotatef(7,0,0,1);
          person3();
          mom_cnt++;
          glutSwapBuffers();

     }

}

void scene2()
{
      for(float k=.7 ; k>=-1; k-=.0005)
     {
     megh_cnt+=.0001;
     glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);
     glLoadIdentity();

     background2();

     glLoadIdentity();
     glTranslatef(0+k,.05,0);
     glScalef(.7,.7,1);
     rand_person(1,0,0);



     glLoadIdentity();
     glTranslatef(.2+k,.05,0);
     glScalef(.7,.7,1);
     rand_person(0,0,1);;

     glLoadIdentity();
     glTranslatef(.18+k,-.4,0);
     book();

     glLoadIdentity();
     glTranslatef(.38+k,-.4,0);
     book();

     glutSwapBuffers();
     }

     megh_cnt=0;

}

void circle()
{
    glColor3f(1,1,0);
    glBegin(GL_POLYGON);
    float x,y;
     for(float i=0;i<=.1; i+=.001)
    {
        x=i;
        y=sqrt(.01-x*x);
        glVertex3f(x,y,0);
        glVertex3f(x,-y,0);
        glVertex3f(-x,-y,0);
        glVertex3f(-x,y,0);
    }
     glEnd();

}

void sun()
{

     glLoadIdentity();
     glTranslatef(sun_cnt,.7,0);
     circle();

}
void sun2()
{

     glLoadIdentity();
     glTranslatef(0,.85,0);
     circle();

}
void janala()
{

    glBegin(GL_POLYGON);
    glColor3f(.75,.75,.75);
    glVertex3f(-.3,.5,0);
    glVertex3f(.3,.5,0);
    glVertex3f(.3,1,0);
    glVertex3f(-.3,1,0);
    glEnd();


    glLineWidth(7);
    glBegin(GL_LINES);
    glColor3f(0,0,0);

    glVertex3f(-.3,.5,0);
    glVertex3f(.3,.5,0);

    glVertex3f(.3,.5,0);
    glVertex3f(.3,1,0);

    glVertex3f(.3,1,0);
    glVertex3f(-.3,1,0);

    glVertex3f(-.3,1,0);
    glVertex3f(-.3,.5,0);

    glVertex3f(-.15,.5,0);
    glVertex3f(-.15,1,0);

    glVertex3f(0,.5,0);
    glVertex3f(0,1,0);

    glVertex3f(.15,.5,0);
    glVertex3f(.15,1,0);
    glEnd();





}

void balish()
{

    glBegin(GL_POLYGON);
    glColor3f(1,1,1);
    glVertex3f(-.1,-.1,0);
    glVertex3f(-.3,-.1,0);
    glVertex3f(-.3,-.48,0);
    glVertex3f(-.1,-.48,0);
    glEnd();
}

void khat()
{
    glBegin(GL_POLYGON);
    glColor3f(.25,0,0);
    glVertex3f(0,0,0);
    glVertex3f(-1,0,0);
    glVertex3f(-1,-1,0);
    glVertex3f(0,-1,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(.25,.2,.2);
    glVertex3f(0,0,0);
    glVertex3f(.1,-.25,0);
    glVertex3f(.1,-1,0);
    glVertex3f(0,-1,0);
    glEnd();

    balish();
    glLoadIdentity();
    glTranslatef(0,-.4,0);
    balish();




}

void person1()
{
       /********person1******/
    //glLoadIdentity();
    glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();



    glPointSize(7);
    glBegin(GL_POINTS);
    glColor3f(0,0,0);
    glVertex3f(.30,-.17,0);
    glVertex3f(.35,-.17,0);
    glEnd();

    glLineWidth(10);
    glBegin(GL_LINES);
    glVertex3f(.33,-.20,0);
    glVertex3f(.33,-.25,0);
    glEnd();

     glLineWidth(5);
    glBegin(GL_LINES);

    glColor3f(1,0,0);
    glVertex3f(.30,-.27,0);
    glVertex3f(.33,-.28,0);

    glVertex3f(.33,-.28,0);
    glVertex3f(.36,-.27,0);
    glEnd();

    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,0,0);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();
}


void person2()
{
       /********person1******/
    //glLoadIdentity();
    glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();



    glPointSize(7);
    glBegin(GL_POINTS);
    glColor3f(0,0,0);
    glVertex3f(.30,-.17,0);
    glVertex3f(.35,-.17,0);
    glEnd();

    glLineWidth(10);
    glBegin(GL_LINES);
    glVertex3f(.33,-.20,0);
    glVertex3f(.33,-.25,0);
    glEnd();

     glLineWidth(5);
    glBegin(GL_LINES);

    glColor3f(1,0,0);
    glVertex3f(.30,-.27,0);
    glVertex3f(.33,-.28,0);

    glVertex3f(.33,-.28,0);
    glVertex3f(.36,-.27,0);
    glEnd();

    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(0,0,1);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);


    glEnd();
}

void person3()
{
       /********person1******/
    //glLoadIdentity();
    glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.13,0);
    glVertex3f(.27,-.10,0);
    glVertex3f(.38,-.10,0);
    glVertex3f(.40,-.13,0);
    glVertex3f(.40,-.15,0);
    glEnd();


     glBegin(GL_POLYGON);
    glColor3f(0,0,0);
    glVertex3f(.40,-.15,0);
    glVertex3f(.45,-.25,0);
    glVertex3f(.55,-.30,0);
    glVertex3f(.57,-.26,0);
    glVertex3f(.47,-.20,0);
    glVertex3f(.40,-.13,0);

    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.15,0);
    glVertex3f(.25,-.27,0);
    glVertex3f(.33,-.30,0);
    glVertex3f(.40,-.27,0);
    glVertex3f(.40,-.15,0);
    glEnd();



    glPointSize(7);
    glBegin(GL_POINTS);
    glColor3f(0,0,0);
    glVertex3f(.30,-.17,0);
    glVertex3f(.35,-.17,0);
    glEnd();

    glLineWidth(10);
    glBegin(GL_LINES);
    glVertex3f(.33,-.20,0);
    glVertex3f(.33,-.25,0);
    glEnd();

     glLineWidth(5);
    glBegin(GL_LINES);

    glColor3f(1,0,0);
    glVertex3f(.30,-.27,0);
    glVertex3f(.33,-.28,0);

    glVertex3f(.33,-.28,0);
    glVertex3f(.36,-.27,0);
    glEnd();

    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.33,-.29,0);
    glVertex3f(.33,-.35,0);
    glEnd();

    glBegin(GL_POLYGON);
    glColor3f(0,1,1);
    glVertex3f(.25,-.35,0);
    glVertex3f(.25,-.70,0);
    glVertex3f(.40,-.70,0);
    glVertex3f(.40,-.35,0);
    glEnd();

    /**hands**/
    glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.25,-.35,0);
    glVertex3f(.22,-.45,0);

    glVertex3f(.22,-.45,0);
    glVertex3f(.24,-.55,0);

    glVertex3f(.40,-.35,0);
    glVertex3f(.43,-.45,0);

    glVertex3f(.43,-.45,0);
    glVertex3f(.41,-.55,0);
    glEnd();

    /***legs****/

    if(mom_cnt%7==0)
    {
        glTranslatef(.007,0,0);
    }
    else if(mom_cnt%9==0)
    {
         glTranslatef(-.007,0,0);
    }

     glLineWidth(20);
    glBegin(GL_LINES);
    glColor3f(1,.8,.5);
    glVertex3f(.30,-.70,0);
    glVertex3f(.30,-.90,0);

    glVertex3f(.35,-.70,0);
    glVertex3f(.35,-.90,0);

    glLoadIdentity();


    glEnd();
}


void background1()
{
     glLoadIdentity();
    khat();

    glLoadIdentity();
    janala();

      glLoadIdentity();
    glRotatef(-90,0,0,1);
    person2();


    glLoadIdentity();
    glRotatef(-90,0,0,1);
    glTranslatef(.3,0,0);
    person1();
}


void megh()
{


    glColor3f(.9,.9,.9);
     glLineWidth(2);

    glBegin(GL_POLYGON);

    glVertex3f(0,-.12,0);
    glVertex3f(-.045,-.10,0);
    glVertex3f(-.08,-.06,0);

    glVertex3f(-.12,-.05,0);
    glVertex3f(-.15,-.02,0);
    glVertex3f(-.16,-.00,0);

    glVertex3f(-.15,.02,0);
    glVertex3f(-.12,.06,0);
    glVertex3f(-.080,.06,0);
    glVertex3f(-.045,.10,0);
    glVertex3f(0,.12,0);


    glVertex3f(.045,.10,0);
    glVertex3f(.080,.06,0);
    glVertex3f(.12,.06,0);
    glVertex3f(.15,.02,0);
    glVertex3f(.16,.00,0);

    glVertex3f(.15,-.02,0);
    glVertex3f(.12,-.06,0);
    glVertex3f(.080,-.06,0);
    glVertex3f(.045,-.10,0);
    glVertex3f(0,-.12,0);

    glEnd();

    glColor3f(0,0,.3);

    glBegin(GL_LINES);

    glVertex3f(0,-.12,0);
    glVertex3f(-.045,-.10,0);
    glVertex3f(-.045,-.10,0);
    glVertex3f(-.080,-.06,0);
    glVertex3f(-.080,-.06,0);
    glVertex3f(-.12,-.06,0);
    glVertex3f(-.12,-.06,0);
    glVertex3f(-.15,-.02,0);
    glVertex3f(-.15,-.02,0);
    glVertex3f(-.16,-.00,0);

    glVertex3f(-.16,-.00,0);
    glVertex3f(-.15,.02,0);
    glVertex3f(-.15,.02,0);
    glVertex3f(-.12,.06,0);
    glVertex3f(-.12,.06,0);
    glVertex3f(-.080,.06,0);
    glVertex3f(-.080,.06,0);
    glVertex3f(-.045,.10,0);
    glVertex3f(-.045,.10,0);
    glVertex3f(0,.12,0);


    glVertex3f(0,.12,0);
    glVertex3f(.045,.10,0);
    glVertex3f(.045,.10,0);
    glVertex3f(.080,.06,0);
    glVertex3f(.080,.06,0);
    glVertex3f(.12,.06,0);
    glVertex3f(.12,.06,0);
    glVertex3f(.15,.02,0);
    glVertex3f(.15,.02,0);
    glVertex3f(.16,.00,0);

      glVertex3f(.16,-.00,0);
    glVertex3f(.15,-.02,0);
    glVertex3f(.15,-.02,0);
    glVertex3f(.12,-.06,0);
    glVertex3f(.12,-.06,0);
    glVertex3f(.080,-.06,0);
    glVertex3f(.080,-.06,0);
    glVertex3f(.045,-.10,0);
    glVertex3f(.045,-.10,0);
    glVertex3f(0,-.12,0);

    glVertex3f(-.12,-.06,0);
    glVertex3f(-.045,-.10,0);

    glVertex3f(.12,-.06,0);
    glVertex3f(.045,-.10,0);
     //glVertex3f(-.08,-.06,0);



    glEnd();





}

void mountain()
{

    glLineWidth(2);


    glBegin(GL_LINES);

    glVertex3f(-.15,0,0);
    glVertex3f(.15,0,0);

    glVertex3f(.15,0,0);
    glVertex3f(.1,.15,0);

    glVertex3f(.1,.15,0);
    glVertex3f(0,.35,0);

    glVertex3f(0,.35,0);
    glVertex3f(-.1,.15,0);

    glVertex3f(-.1,.15,0);
    glVertex3f(-.15,0,0);


    glEnd();

    glColor3f(.5,.3,.3);
     glBegin(GL_POLYGON);

    glVertex3f(-.15,0,0);
    glVertex3f(.15,0,0);

    glVertex3f(.15,0,0);
    glVertex3f(.1,.15,0);

    glVertex3f(.1,.15,0);
    glVertex3f(0,.35,0);

    glVertex3f(0,.35,0);
    glVertex3f(-.1,.15,0);

    glVertex3f(-.1,.15,0);
    glVertex3f(-.15,0,0);


    glEnd();

}

void river()
{

    glBegin(GL_POLYGON);

    glColor3f(0,.6,.9);
    glVertex3f(-1,.05,0);
    glVertex3f(-.75,.075,0);
    glVertex3f(-.50,.10,0);
    glVertex3f(-.25,.075,0);
    glVertex3f(0,.00,0);

    glVertex3f(.25,.075,0);
    glVertex3f(.50,.10,0);
    glVertex3f(.75,.075,0);
    glVertex3f(1,.050,0);
    glVertex3f(1,-.15,0);
    glVertex3f(.75,-.125,0);
    glVertex3f(.50,-.10,0);
    glVertex3f(.50,-.10,0);
    glVertex3f(.25,-.125,0);
    glVertex3f(0,-.15,0);
    glVertex3f(-.25,-.125,0);
    glVertex3f(-.50,-.10,0);
    glVertex3f(-.75,-.125,0);
    glVertex3f(-1,-.15,0);
    glEnd();

    glLineWidth(3);
    glBegin(GL_LINES);
    glColor3f(0,.1,.1);
    glVertex3f(-1,.05,0);
    glVertex3f(-.75,.075,0);
    glVertex3f(-.75,.075,0);
    glVertex3f(-.50,.10,0);
    glVertex3f(-.50,.10,0);
    glVertex3f(-.25,.075,0);
    glVertex3f(-.25,.075,0);
    glVertex3f(0,.08,0);
    glVertex3f(0,.08,0);
    glVertex3f(.25,.075,0);
    glVertex3f(.25,.075,0);
    glVertex3f(.50,.10,0);
    glVertex3f(.50,.10,0);
    glVertex3f(.75,.075,0);
    glVertex3f(.75,.075,0);
    glVertex3f(1,.050,0);
    glVertex3f(1,-.15,0);
    glVertex3f(.75,-.125,0);
    glVertex3f(.75,-.125,0);
    glVertex3f(.50,-.10,0);
    glVertex3f(.50,-.10,0);
    glVertex3f(.25,-.125,0);
    glVertex3f(.25,-.125,0);
    glVertex3f(0,-.15,0);
    glVertex3f(0,-.15,0);
    glVertex3f(-.25,-.125,0);
    glVertex3f(-.25,-.125,0);
    glVertex3f(-.50,-.10,0);
    glVertex3f(-.50,-.10,0);
    glVertex3f(-.75,-.125,0);
    glVertex3f(-.75,-.125,0);
    glVertex3f(-1,-.15,0);
    glEnd();




}


void tree()
{

    glColor3f(.5,.3,.2);

     glBegin(GL_POLYGON);
    glVertex3f(-.05,0,0);
    glVertex3f(.05,0,0);
    glVertex3f(.05,.3,0);
    glVertex3f(-.05,.3,0);
    glEnd();

    glBegin(GL_POLYGON);

    glVertex3f(.05,.3,0);
    glVertex3f(.1,.325,0);
    glVertex3f(.05,.325,0);
    glVertex3f(0,.35,0);
    glVertex3f(-.05,.325,0);
    glVertex3f(-.1,.325,0);
    glVertex3f(-.05,.3,0);
    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(.2,1,.2);

    glVertex3f(.1,.325,0);
    glVertex3f(.05,.325,0);
    glVertex3f(0,.35,0);
    glVertex3f(0,.65,0);
    glVertex3f(.1,.58,0);
    glVertex3f(.18,.60,0);
    glVertex3f(.22,.55,0);
    glVertex3f(.20,.50,0);
    glVertex3f(.25,.45,0);
    glVertex3f(.24,.38,0);
    glVertex3f(.22,.35,0);
    glVertex3f(.18,.32,0);

    glEnd();
    glBegin(GL_POLYGON);
    glColor3f(.2,1,.2);

    glVertex3f(-.1,.325,0);
    glVertex3f(-.05,.325,0);
    glVertex3f(-0,.35,0);
    glVertex3f(-0,.65,0);
    glVertex3f(-.1,.58,0);
    glVertex3f(-.18,.60,0);
    glVertex3f(-.22,.55,0);
    glVertex3f(-.20,.50,0);
    glVertex3f(-.25,.45,0);
    glVertex3f(-.24,.38,0);
    glVertex3f(-.22,.35,0);
    glVertex3f(-.18,.32,0);

    glEnd();



}


void road()
{
    glColor3f(.9,.5,.1);

     glBegin(GL_POLYGON);
    glVertex3f(-1,.15,0);
    glVertex3f(1,.15,0);
    glVertex3f(1,-.15,0);
    glVertex3f(-1,-.15,0);
    glEnd();


}


void megh_float()
{


    glLoadIdentity();
    glTranslatef(-.8+megh_cnt,.8,0);
    megh();


    glLoadIdentity();
    glTranslatef(-.6+megh_cnt,.7,0);
    megh();


    glLoadIdentity();
    glTranslatef(-.4+megh_cnt,.9,0);
    megh();


    glLoadIdentity();
    glTranslatef(-.2+megh_cnt,.9,0);
    megh();


    glLoadIdentity();
    glTranslatef(.2+megh_cnt,.9,0);
    megh();


    glLoadIdentity();
    glTranslatef(.4+megh_cnt,.8,0);
    megh();


    glLoadIdentity();
    glTranslatef(.7+megh_cnt,.9,0);
    megh();

}
void sky()
{



    glColor3f(0,.5,1);

     glBegin(GL_POLYGON);
    glVertex3f(-1,1,0);
    glVertex3f(1,1,0);
    glVertex3f(1,.6,0);
    glVertex3f(-1,.6,0);
    glEnd();

}
void background2()
{

    glLoadIdentity();
    sky();

    glLoadIdentity();
    sun2();

    megh_float();




    glLoadIdentity();
    glTranslatef(.5,.3,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.3,.25,0);
    mountain();

    glLoadIdentity();
    glTranslatef(.1,.25,0);
    mountain();


    glLoadIdentity();
    glTranslatef(-.1,.3,0);
    mountain();

     glLoadIdentity();
     glTranslatef(0,.1,0);
     river();

     glLoadIdentity();
     glTranslatef(-.7,-.4,0);
     tree();

       glLoadIdentity();
     glTranslatef(-.7,.3,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.6,.35,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.5,.3,0);
     glScalef(.3,.3,.3);
     tree();


       glLoadIdentity();
     glTranslatef(-.4,.35,0);
     glScalef(.3,.3,.3);
     tree();

     glLoadIdentity();
     glTranslatef(0,-.6,0);
     road();

}


void book()
{
    glBegin(GL_POLYGON);
    glColor3f(1,.8,.2);
    glVertex3f(0,0,0);
    glVertex3f(.1,0,0);
    glVertex3f(.1,.15,0);
    glVertex3f(0,.15,0);
    glEnd();

     glBegin(GL_POLYGON);
    glColor3f(0,0,.2);
    glVertex3f(0,0,0);
    glVertex3f(-.01,.02,0);
    glVertex3f(-.01,.17,0);
    glVertex3f(0,.15,0);
    glEnd();


     glBegin(GL_POLYGON);
     glColor3f(0,0,.4);
     glVertex3f(0,.15,0);
     glVertex3f(-.01,.17,0);
     glVertex3f(.09,.17,0);
     glVertex3f(.1,.15,0);
     glEnd();

}
