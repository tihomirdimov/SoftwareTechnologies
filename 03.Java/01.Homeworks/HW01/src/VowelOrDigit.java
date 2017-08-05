import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String args[]) {
        Scanner scan = new Scanner(System.in);
        char input = scan.next().charAt(0);
        String vowelsUpper = "AEIOUY";

        if (vowelsUpper.indexOf(input) >= 0 || vowelsUpper.toLowerCase().indexOf(input) >= 0) {
            System.out.println("vowel");
        }
        else if (Character.isDigit(input)) {
            System.out.println("digit");
        }
        else {
            System.out.println("other");
        }
    }
}
