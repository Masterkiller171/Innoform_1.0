

import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;

public class fileWrtr {


    static void wrter(int passleng, String username, String website, String choiceCase, String choiceSpecial, String choiceNumber, String encrypted) {
        Scanner read = new Scanner(System.in);
        PasswordRandomizer randomizer = new PasswordRandomizer(passleng, username, website, choiceCase, choiceSpecial, choiceNumber);
        File file = new File("/Users/youri/Documents/IdeaProjects/TMCProjects/avansbreda-avansbreda-programmeren-1-2018-2019/Java_project/src/passWords/" + randomizer.getWebsite() + ".txt");

        if(file.exists()){

            System.out.println("Website already exist do you want to choose another name or overwrite or stop? Choose name or overwrite or stop");
            String choice = read.nextLine();
            choice.toLowerCase();
            if(choice.equals("name")){
                System.out.println("Choose a new name for the file.");
                String newName = read.nextLine();
                try {
                    PrintWriter pw = new PrintWriter(file);
                    pw.println(newName);
                    pw.println(randomizer.getUsername());
                    pw.println(encrypted);
                    pw.flush();
                    pw.close();
                } catch (
                        IOException e) {
                    e.printStackTrace();
                }
            }else if(choice.equals("overwrite")){
                file.delete();
                try {
                    PrintWriter pw = new PrintWriter(file);
                    pw.println(randomizer.getCurDate());
                    pw.println(randomizer.getWebsite());
                    pw.println(randomizer.getUsername());
                    pw.println(encrypted);
                    pw.flush();
                    pw.close();
                } catch (
                        IOException e) {
                    e.printStackTrace();
                }

            }else if (choice.equals("stop")){
                System.exit(0);
            }
        }else{
            try {
                PrintWriter pw = new PrintWriter(file);
                pw.println(randomizer.getCurDate());
                pw.println(randomizer.getWebsite());
                pw.println(randomizer.getUsername());
                //  for(int count =0; count < 100000; count++)
                pw.println(encrypted);
                pw.flush();
                pw.close();
            } catch (
                    IOException e) {
                e.printStackTrace();
            }

        }

    }

}