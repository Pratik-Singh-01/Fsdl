const express = require('express');
const app = express();

app.use(express.json()); // middleware

const cors = require('cors');
app.use(cors());

// ✅ 1. Dummy Data
let books = [
    { id: 1, title: "Atomic Habits", author: "James Clear" },
    { id: 2, title: "Rich Dad Poor Dad", author: "Robert Kiyosaki" }
];

// ✅ 2. ROUTES (WRITE STEP 5 HERE)

// GET all books
app.get('/books', (req, res) => {
    res.json(books);
});

// GET book by ID
app.get('/books/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const book = books.find(b => b.id === id);

    if (!book) {
        return res.status(404).json({ message: "Book not found" });
    }

    res.json(book);
});

// POST new book
app.post('/books', (req, res) => {
    const { title, author } = req.body;

    const newBook = {
        id: books.length + 1,
        title,
        author
    };

    books.push(newBook);

    res.status(201).json(newBook);
});

// PUT update book
app.put('/books/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const { title, author } = req.body;

    const book = books.find(b => b.id === id);

    if (!book) {
        return res.status(404).json({ message: "Book not found" });
    }

    book.title = title || book.title;
    book.author = author || book.author;

    res.json(book);
});

// DELETE book
app.delete('/books/:id', (req, res) => {
    const id = parseInt(req.params.id);

    books = books.filter(b => b.id !== id);

    res.json({ message: "Book deleted successfully" });
});

// ✅ 3. SERVER START (ALWAYS LAST)
const PORT = 3000;

app.listen(PORT, () => {
    console.log(`Server running on http://localhost:${PORT}`);
});