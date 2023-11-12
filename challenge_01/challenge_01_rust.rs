use std::collections::{BTreeMap, VecDeque};
use std::fs;

fn main() -> Result<(), std::io::Error> {
    let file_content = fs::read_to_string("message_01.txt")?;
    let words_array: Vec<&str> = file_content.split_whitespace().collect();
    let mut words_count: BTreeMap<&str, usize> = BTreeMap::new();
    let mut words_order: VecDeque<&str> = VecDeque::new();

    for word in words_array.iter() {
        let count = words_count.entry(word).or_insert(0);
        *count += 1;
        if !words_order.contains(word) {
            words_order.push_back(word);
        }
    }

    let mut result_string = String::new();
    for word in words_order.iter() {
        result_string.push_str(&format!("{}{}", word, words_count[word]));
    }
    println!("{}", result_string);

    Ok(())
}