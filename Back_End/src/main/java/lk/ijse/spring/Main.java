package lk.ijse.spring;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication // This annotation is key
public class Main {

    public static void main(String[] args) {
        SpringApplication.run(WebAppInitializer.class, args);
    }
}
