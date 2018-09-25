
import java.util.Random;
import java.text.SimpleDateFormat;
import java.util.Date;

public class PasswordRandomizer {
    private int Length;
    private String Website;
    private String Username;
    private String password;
    private String curDate;
    private String choiceCases;
    private String choiceSpecials;
    private String numBers;
    private Random random = new Random();

    public PasswordRandomizer(int length, String username, String website, String choiceCase, String choiceSpecial, String numbers) {
        this.Length = length;
        this.Username = username;
        this.Website = website;
        this.choiceCases = choiceCase;
        this.choiceSpecials = choiceSpecial;
        this.numBers = numbers;
        setPassword();
        setTime();
    }
    public void setPassword(){
        StringBuilder sb = new StringBuilder();
        String alpha = "abcdefghijklmnopqrstuvwxyz";
        String specialChar = "!@#$_-+=*&<>";
        String numbers = "1234567890";
        String combo = "";
        choiceCases.toLowerCase();

        if (choiceCases.equals("lowcase")){
            combo += alpha;
        }else if(choiceCases.equals("upcase")){
            combo += alpha.toUpperCase();
        }else if (choiceCases.equals("mixed")){
            combo = combo + alpha + alpha.toUpperCase();
        }

        if(choiceCases.equals("numbers")){
            combo += numbers;
        }else if(choiceCases.equals("nonumbers")){
            combo += "";
        }

        if (choiceSpecials.equals("special")){
            combo += specialChar;
        }else if (choiceSpecials.equals("nospecial")){
            combo += "";
        }
        for(int count = 0;  count < Length; count++){
            int rando = random.nextInt(combo.length());
            char chaar= combo.charAt(rando) ;
            sb.append(chaar).toString();
        }
        this.password = sb.toString() ;
    }

    public void setTime(){
        SimpleDateFormat formatt = new SimpleDateFormat("dd/MM/yyyy HH:mm");
        Date date = new Date();
        this.curDate = formatt.format(date);
    }
    public String getPassword() {

        return this.password;

    }
    public String getWebsite(){
        return this.Website;
    }
    public String getUsername(){
        return this.Username;
    }
    public String getCurDate(){
        return this.curDate;
    }
}