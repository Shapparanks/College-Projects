//Import Scanner
import java.util.Scanner;

public class Project1 {
public static void main(String[] args) {
int n;

Scanner input = new Scanner(System.in);

System.out.print("Enter how many numbers are going to be used: ");

//reading the number of input values that we want to enter
n = input.nextInt();

//creates an array for input values

int[] array = new int[n];
System.out.println("Enter the numbers: ");

for(int i = 0; i < n; i++) {

//reading array number from the user   
array[i] = input.nextInt();
}

//finding largest number of array
int lnum = array[0];

for (int i = 1; i < array.length; i++)

    if (array[i] > lnum)

    lnum = array[i];

//Copy of the array to format output
int[] copyA = new int[array.length];

for (int i = 0; i < copyA.length; i++) {

    copyA[i] = array[i]; }

//Formatting Output Y-Axis
for(lnum = 13;lnum >= 0;lnum--){

    if(lnum < 10) System.out.print(String.format(" %d |",lnum));

else System.out.print(String.format("%d |",lnum));

//Setting up points on "Graph"
for(int i = 0;i < array.length;i++){

    if(array[i] == lnum){
System.out.print(" x ");

array[i] = array[i] -1; }

else System.out.print("   "); }

System.out.println(); }

//Spacing for X-Axis
for(int k = 0;k <= (array.length) * 3.5;k++){

    System.out.print("-");

    System.out.print("");}

    System.out.println(" ");

    System.out.print("   ");
//Output numbers for graph
    for(int l = 0;l < copyA.length;l++){
        
        System.out.printf("%3d",copyA[l]);
    
    }
  }
}
