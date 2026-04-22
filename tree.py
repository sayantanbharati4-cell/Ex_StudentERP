import os

IGNORE_DIRS = {"node_modules", ".git", "__pycache__", ".venv", "env"}
IGNORE_FILES = {".DS_Store"}

def generate_tree(root=".", prefix=""):
    entries = sorted(os.listdir(root))
    entries = [e for e in entries if e not in IGNORE_DIRS and e not in IGNORE_FILES]

    for i, entry in enumerate(entries):
        path = os.path.join(root, entry)
        connector = "└── " if i == len(entries) - 1 else "├── "
        print(prefix + connector + entry)

        if os.path.isdir(path):
            extension = "    " if i == len(entries) - 1 else "│   "
            generate_tree(path, prefix + extension)

if __name__ == "__main__":
    print(".")
    generate_tree()