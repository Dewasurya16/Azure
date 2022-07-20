let Array1 = [
  {
    name: "Indomie",
    harga: 3000,
    rating: 5,
    likes: 150,
  },
  {
    name: "Laptop",
    harga: 4000000,
    rating: 4.5,
    likes: 123,
  },
  {
    name: "Aqua",
    harga: 3000,
    rating: 4,
    likes: 250,
  },
  {
    name: "Smart TV",
    harga: 4000000,
    rating: 4.5,
    likes: 42,
  },
  {
    name: "Headphone",
    harga: 4000000,
    rating: 3.5,
    likes: 90,
  },
  {
    name: "Very Smart TV",
    harga: 4000000,
    rating: 3.5,
    likes: 87,
  },
];
console.log(
  Array1.sort(
    (a, b) => a.harga - b.harga || b.rating - a.rating || b.likes - a.likes
  )
);
