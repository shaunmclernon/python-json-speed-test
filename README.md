# Python/json speed test

>Simple test to time processing a large json file using python using ijson.

This repo was built based on a blog post [Python - Iterate Over Massive JSON Files]. Wanted to do some experiments on how quickly python and ijson can process large files.

>NOTE: This is only meant to give some rough metrics.

## Generate some test data

To do this test, lets generate some test data.

Create a file with 5 million random json objects, which takes about 30 seconds
approximately and will generate a 4.4G file.

```bash
time php generate_test_data.php 5000000
```

```bash
php generate_test_data.php 5000000  35.03s user 34.43s system 84% cpu 1:22.35 total
```

## dependencies

```bash
pip3 install -r requirements.txt
```

### Usage

```bash
python3 count.py --help
Usage: count.py [OPTIONS]

Options:
  -f, --file TEXT  JSON file to count  [default:
                   data/test_with_1000_entries.json]
  --help           Show this message and exit.
```

## Run the test

Now lets do a crude test on how long it takes to process our newly generated JSON file.

```bash
time python3 count.py --file data/test_with_5000000_entries.json
```

Output:

```bash
...
1104b1b83944541d1f7beb67788f99a1
ce8f08e43dbbb6ce2dcad20a06f567c5
071708f489eb35267a3a881af58b36bb
586e76c3458395cc3af93ca11eae8c76
8b4cb6c930157749251697a7af8e82ae
099f4c21a8ed894cefd939d640deb80c
bc205bfcfc4ae10023d4a752c44b7ffc
b63f3f64fcd3d0cca41957f8ce656da7
2fd47f8d5a9cff6e914900692f95f4f4
793b3bbd77672f10332272d4ad247ac0
f9c9632f298bd6ac4e76b4a552200230
There are 5000000 items in the JSON data file.
python3 count.py --file data/test_with_5000000_entries.json  42.85s user 27.95s system 97% cpu 1:12.62 total
```

The experiment can be tried with different sized files.

[Python - Iterate Over Massive JSON Files]: https://blog.programster.org/python-iterate-over-massive-json-files
