use std::fs;

fn main() -> Result<(), std::io::Error> {
    let mut count_var = 0;
    let mut result = String::new();

    let file_content = fs::read_to_string("message_02.txt")?;
    for c in file_content.chars() {
        match c {
            '#' => count_var += 1,
            '@' => count_var -= 1,
            '*' => count_var *= count_var,
            '&' => result += &count_var.to_string(),
            _ => println!("Error")
        }
    }
    println!("{}", result);

    Ok(())
}
