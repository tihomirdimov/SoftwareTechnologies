import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        char[] output = new char[3];
        for (int i = 0; i < output.length; i++) {
            char temp = scan.nextLine().charAt(0);
            output[i] = temp;
        }
        for (int i = output.length - 1; i >= 0; i--) {
            System.out.print(output[i]);
        }
    }
}