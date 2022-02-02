import json
import ijson
import click


def doSomethingWithObj(obj):
    print("%s" % (obj["uuid"]))


@click.command()
@click.option(
    "--file",
    "-f",
    default="data/test_with_1000_entries.json",
    help="JSON file to count",
    show_default=True,
)
def main(file):
    counter = 0

    # https://github.com/isagalaev/ijson/issues/62
    try:
        with open(file, "rb") as data:
            for obj in ijson.items(data, "item"):
                counter = counter + 1
                doSomethingWithObj(obj)

        print("There are " + str(counter) + " items in the JSON data file.")
    except FileNotFoundError:
        print(f"\nFile `{file}` does not exist. Try generating some test data like so.")
        print("\nphp generate_test_data.php 10000")


if __name__ == "__main__":
    main()
