/********************************************************/
/********************************************************/
/*************          RAKIB         *******************/
/************       CSE 13, RUET       ******************/
/***********          contact:           ****************/
/******     mail: rakib_cse13@outlook.com     ***********/
/*****           mobile : 01846207019           *********/
/********************************************************/
/********************************************************/

#include<iostream>
#include<bits/stdc++.h>
using namespace std;






/******macros****/

#define Max 200000
#define pb(x) push_back(x)
#define ll long long
#define pi acos(-1.000)
#define valid (x>=1 && x<=col && y>=1 && y<=row)
#define uu first
#define vv second
#define mem(arr,val) memset(arr,val,sizeof(arr))
#define mod 1000000007
#define pii pair<ll,ll>
#define pis pair<ll,string>
#define psi pair<string,int>
#define inf
#define pds pair<double,string>






/****Prototypes******/


void MENU();
void startup();
void Stations();
int convert_int(string str);
bool string_matching(string str1,string str2);
void getInput();
void locations();
void about();
vector<string> find_way(string src,string des);
void suggestion(string str2);
void add_new_location();
bool valid_loc(string str);








/***** useful function ****/

ll power(ll base, ll p){ ll ans=1;if(p==0)return 1;for(ll i=1;i<=p;i++)ans*=base;return ans;}
ll gcd(ll a, ll b){if(a==0)return b;gcd(b,a%b);}







/***** Nececessary global variables ****/
ll row,col;

map<string,string>par;
map<string,ll>dis;

map<string,vector<psi> >graph;

string station[Max];
string location[Max];





ll dijkastra(string src,string n)
{


    priority_queue<pis,vector<pis>,greater<pis> >q;

    q.push(pis(0,src));

    dis[src]=0;
    par[src]="1";

    while(!q.empty())
    {
        pis top=q.top();
        q.pop();

        string u=top.vv;

        if(u==n)
            return dis[u];

        for(int i=0;i<graph[u].size();i++)
        {
            string v=graph[u][i].uu;
            int w=graph[u][i].vv;

            if(dis[u]+w<dis[v])
            {
                dis[v]=dis[u]+w;
                par[v]=u;
                q.push(pis(dis[v],v));
            }
        }


    }

    return -1;



}


vector<string> find_way(string src,string des)
{
    vector<string>way;

    while(des!="1")
    {
        way.push_back(des);
        des=par[des];
    }

   printf("\n");
    reverse(way.begin(),way.end());
    for(int i=0;i<way.size();i++)
    {
        cout<<" ---->  "<<way[i];
    }

    cout<<endl;

    //printf("\n\n");

    return way;


}



int main()
{
     getInput();
     startup();
     MENU();

     getchar();



}



void Search()
{


    string source;
    string destinition;



    printf("\n\nput the place of occurance:   ");
    //getchar();
    getline(cin,destinition);

    if(valid_loc(destinition))
    {

    ifstream input;

    input.open("stations.txt");

    while(!input.eof())
    {
        getInput();

        getline(input,source);





        if(source[0]>='a' && source[0]<='z')
        {
            printf("\n\n");

            printf("______________________________________________________________________________\n");
             cout<<source<<"       "<<destinition<<" : ";


         int res=dijkastra(source,destinition);

         if(res==-1)
            printf("Sorry.....there is no way to the location from this station!!!!!!\n");
         else
        {

         cout<<"       DISTANCE = ";
         cout<<res<<" ";
         cout<<"Meters"<<endl;

         printf("\nShortest way:");

         find_way(source,destinition);
            printf("______________________________________________________________________________\n");
        }




         dis.clear();
         par.clear();

         graph.clear();

        }



    }
    }
    else
    {
        printf("\nYour given location is not valid!!!!!!!!!!\n");
        suggestion(destinition);
        Search();
    }


}





void getInput()
{

    ifstream input;
    ofstream output;

    int n,d;


    string s1;
    string s2;
    string s3;

    int i=0;

    input.open("project.txt");
    while(!input.eof())
    {
        i++;

        if(i%3==1)
          {
            getline(input,s1);

          }
        else if(i%3==2)
         {

          getline(input,s2);

         }
         else
         {



           getline(input,s3);



            string n1,n2;
            int w;


            n1=s1;
            n2=s2;
            w=convert_int(s3);

            dis[n1]=INFINITY;
            dis[n2]=INFINITY;

            graph[n1].push_back(psi(n2,w));
            graph[n2].push_back(psi(n1,w));

         }

    }



}

void startup()
{


    printf("\n\n                           RAJSHAHI MTROPOLITION POLICE \n");
    printf("                               RAJSHAHI,BANGLADESH\n");
    printf("                      All rights reserverd by the Authority\n");

    printf("\n\n\n");



}






void MENU()
{
    printf("\n\n                              MENU:\n\n");
    printf("                        1.Police stations of Rajshahi\n");
    printf("                        2.Search the efficient way\n");
    printf("                        3.locations list\n");
    printf("                        4.Add new Roads Linking two place\n");
    printf("                        5.about\n");
    printf("                        6.Exit\n");


    printf("Put your choice: ");
    string str;
    getline(cin,str);
    //getchar();

    if(str=="1")
    {
        Stations();
    }
    else if(str=="2")
    {
        Search();
    }
    else if(str=="3")
    {
        locations();
    }
    else if(str=="4")
    {

       add_new_location();

    }
    else if(str=="5")
    {
         about();
    }
    else if(str=="6")
    {
        return;
    }
    else
    {
        printf("You have made an invalid choice!!!!!!!!!!!!!! try again..........\n\n\n");
        MENU();
    }

    MENU();
}






void Stations()
{


    printf("\n\nPolice stations of rajshahi are:\n\n");

    string str="police";

    fstream output;
    output.open("stations.txt");

    ifstream input;
    input.open("project.txt");

     map<string,int>mymap;

    while(!input.eof())
    {

        string loc;
        getline(input,loc);

        if(string_matching(loc,str))
            {

              string s=loc;

              mymap[s]++;
              if(mymap[s]==1)
                {
                    cout<<s<<endl;
                    output<<s<<endl;
                }
            }

    }
    output.close();
    input.close();





    mymap.clear();



}


void locations()
{

     printf("\n\nThe recorded locations list:\n\n");

     ifstream input;
     ofstream output;

    output.open("locations.txt");

    input.open("project.txt");

    map<string,int>mymap;

    while(!input.eof())
    {
        string s;
        getline(input,s);
        {
            if(!(s[0]>='0' && s[0]<='9'))
            {


            mymap[s]++;
            if(mymap[s]==1)
                {
                    cout<<s<<endl;
                    output<<s<<endl;
                }
            }
        }
    }
    mymap.clear();

}




int convert_int(string str)
{
   int  l=str.size();

   int res=0;

   for(int i=0;i<l;i++)
   {
       res=res*10+(str[i]-48);

   }

   return res;
}





bool string_matching(string str1,string str2)
{
    int l1=str1.size();
    int l2=str2.size();


    if(l1<l2)
        return 0;

    bool flag=0;

    for(int i=0;i<l1-l2+1;i++)
    {
        flag=0;


       if(str2[0]==str1[i])
       {
           int k=i;

           for(int j=0;j<l2;j++)
           {
               if(str2[j]==str1[j+k])
               {
                 flag=1;
               }
               else
               {
                   flag=0;
                   break;
               }
           }

           if(flag==1)
            return 1;
       }




    }
    return flag;

}


void about()
{
    printf("\n\nThis program is developed by :\n\n");
    printf("Rakibul hassan\n");
    printf("student-session 2013-14\n");
    printf("Dept. of computer science & engineering\n");
    printf("Rajshahi university of engineering & technology\n");

    printf("\ncontact:\n");
    printf("Email: rakib_cse13@outlook.com\n");
    printf("Mobile: +8801846207019\n\n");
}



void suggestion(string str2)
{



    pair<double,string>suit;
    priority_queue<pds,vector<pds>,less<pds> >q;

    vector<string>sugg;

    ifstream input;

    string str1;
    double percentage=0;

    input.open("locations.txt");

    while(! input.eof())
   {


    getline(input,str1);

    int l1=str1.size();
    int l2=str2.size();




    for(int i=0;i<l1;i++)
    {
        int cnt=0;



           int k=i;
           cnt=0;

           for(int j=0;j<l2;j++)
           {
               if(j+k<l2)
               if(str2[j]==str1[j+k])
               {
                 cnt++;
               }
           }

        percentage=((double)cnt/(double)l2)*100;



       if(percentage>=60.000)
       {
           q.push(make_pair(percentage,str1));

           //cout<<str1<<"  "<<percentage<<endl;

       }

    }

   }

   for(int i=0;i<5 && !q.empty();i++)
   {
       //suit=q.top();

       sugg.push_back(q.top().second);
       q.pop();
   }


   cout<<"\n\nYou might be looking for a location from this:\n\n";

   if(sugg.empty())
   {
      printf("Sorry!!!!!!!!!! no possible match found for your input........plese see the available location list\n\n") ;
   }
   else
   for(int i=0;i<sugg.size();i++)
   {
       cout<<"         "<<sugg[i]<<endl;
   }


   while(!q.empty())
    q.pop();

   sugg.clear();


}



void add_new_location()
{

    string str;

    ofstream output;
    ifstream input;
    input.open("project.txt");

    output.open("new locations.txt");


    string choice;

    printf("NEW LOCATION ADDING:\n\n");

    while(1)
    {


    printf("                 Press 1 to edit\n");
    printf("                 Press 2 to return\n");

    getline(cin,choice);
    if(choice=="1")
    {
        printf("put the first location: ");
        getline(cin,str);
        output<<str<<endl;
        printf("Put the second location: ");
        getline(cin,str);
        output<<str<<endl;
        printf("Put the distance between the location: ");
        getline(cin,str);
        output<<str<<endl;

    }
    else if(choice=="2")
    {
        while(!input.eof())
        {
            getline(input,str);
            output<<str<<endl;
        }
        output.close();
        input.close();

        input.open("new locations.txt");
        output.open("project.txt");

        while(!input.eof())
        {
              getline(input,str);
              output<<str<<endl;
        }

          output.close();
          input.close();



          printf("\n");



        return;
    }
    else
    {
        printf("Wrong choice!!!!!!!!!! try again \n\n\n");

    }

    }

}




bool valid_loc(string str)
{
    ifstream input;

    input.open("locations.txt");

    while(!input.eof())
    {
        string str2;
        getline(input,str2);

        if(str2==str)
        {
            input.close();
            return true;
        }
    }
    return false;
}

