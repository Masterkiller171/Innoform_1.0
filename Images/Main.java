import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;


public class Main {

    public static void main(String[] args)  throws IOException{
        int passleng;
        String website;
        String username;
        String choiceCase;
        String choiceSpecial;
        String choiceNumber;

        Scanner read = new Scanner(System.in);

        //User could choose among these parameters: game, encrypt, dencrypt and openfile
        System.out.println("Do want to generate a password or play a game or encrypt or dencrypt or openfile?");
        String reader = read.nextLine();
        if (reader.equals("password")) {
            System.out.println("What's the website or company?");
            website = read.nextLine();

            System.out.println("What's the username of this account?");
            username = read.nextLine();

            System.out.println("How long do you want your password to be?");
            passleng = Integer.parseInt(read.nextLine());

            System.out.println("Do you want only lower case characters, uppercases or mixed? Choose lowcase, upcase or mixed.");
            choiceCase = read.nextLine();

            System.out.println("Do you want special characters (!@#$_-+=*&<>) or not? Choose special or nospecial.");
            choiceSpecial = read.nextLine();

            System.out.println("Do you want numeric characters (0123456789) or not? Choose numbers or nonumbers.");
            choiceNumber = read.nextLine();

            PasswordRandomizer randomizer = new PasswordRandomizer(passleng, username, website, choiceCase, choiceSpecial, choiceNumber);
            System.out.println("Website: " + randomizer.getWebsite());
            System.out.println("Username: " + randomizer.getUsername());
            System.out.println("Password: " + randomizer.getPassword());
            System.out.println("Current date: " + randomizer.getCurDate());

            encrypt encrypt = new encrypt(randomizer.getPassword());
            String encrypted = encrypt.getencryptPassWord();
            fileWrtr.wrter(passleng, username, website, choiceCase, choiceSpecial, choiceNumber, encrypted);

        }else if(reader.equals("game")){
            while(true) {
                System.out.println("Choose a number between 1 and 6.");
                int guess = Integer.parseInt(read.nextLine());
                dice dice = new dice(guess);
                System.out.println(dice.numchecker());
                System.out.println("Your balance: " + dice.getBalance());
                System.out.println("do you want to throw another one, check your balance or quit? Choose play, level, shop, balance or quit.");
                String choice = read.nextLine();

                choice.toLowerCase();
                if(choice.equals("balance")){
                    System.out.println("Your balance: " + dice.getBalance());
                }else if(choice.equals("quit")){
                    break;
                }else if(choice.equals("shop")){
                    System.out.println("Items: shrinker, moneygrabber");
                    String item = read.nextLine();


                   if(item.equals("shrinker") || item.equals("moneygrabber")) {
                       System.out.println(dice.getShop(item));
                   }
                }else if(choice.equals("level")){
                    System.out.println(dice.getLevel());
                }
            }
    }else if(reader.equals("encrypt")){
            System.out.println("Password?");
            String pass = read.nextLine();
             encrypt encrypt = new encrypt(pass);
             encrypt.setPassWord(pass);
            System.out.println(encrypt.getencryptPassWord());
            
        }else if (reader.equals("dencrypt")){
            System.out.println("Password?");
            String dencrypt = read.nextLine();
            dencrypt dencrypted = new dencrypt(dencrypt);
            System.out.println(dencrypted.getencryptPassWord());

        }else if (reader.equals("openfile")){
            fileRdr fileDataArr = new fileRdr();
            ArrayList<String> data = fileDataArr.second();

            for (String Data : data){
                System.out.println(Data);
            }
        }
}
}
