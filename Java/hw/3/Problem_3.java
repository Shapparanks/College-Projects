public class Problem_3 {
  public static void main(String[] args) {

    //Defining max number as 5.0 because circle center is at center and radius is 5.
    //So always x and y values will be between 5 and -5
  
    double max_number =  5.0;  
    double min_number = -5.0;

   //generating random number between 5 and -5 for both x and y
    double x = min_number + Math.random() * (max_number - min_number);
    double y = min_number + Math.random() * (max_number - min_number);

    
    //calculating the distance from point(x,y) and center (0,0) using euclidean distance
    //formulate is square_root((x*x) + (y*y)) since other point is (0,0)
    double distance = Math.sqrt((x*x) + (y*y));
    

    System.out.println("The point is (" +x +"," +y+ ") and its distance to the center is " + distance);

  }
}
