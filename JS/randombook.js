const all_books = ["resource/booth1_resources/Math1.jpg", "resource/booth1_resources/TGAT2.jpg", "resource/booth1_resources/TPAT3.jpg", "resource/booth2_resources/12_Rules_for_Life.jpg","resource/booth2_resources/Atomic_Habits.jpg", "resource/booth2_resources/Four_Thousand_Weeks.jpg", "resource/booth2_resources/Manifest.webp", "resource/booth2_resources/Mentalist.webp","resource/booth2_resources/rule_of__mirror.webp","resource/booth3_resource/BadguyForHappy.jpg","resource/booth3_resource/Darkmakmak.jpg","resource/booth3_resource/DarkSide.jpg","resource/booth3_resource/ikigai.jpg","resource/booth3_resource/kaizen.jpg","resource/booth3_resource/zero reset magic.jpg","resource/booth4_resources/bookmath1.jpg","resource/booth4_resources/bookmath2.jpg","resource/booth4_resources/bookmath3.jpg","resource/booth4_resources/bookmath4.jpg","resource/booth4_resources/bookmath5.jpg","resource/booth6_resource/img1-booth6.jpg","resource/booth6_resource/img2-booth6.jpg","resource/booth6_resource/img3-booth6.jpg","resource/booth6_resource/img4-booth6.jpg","resource/booth7_resources/At_the_Mountain_of_Madness.png","resource/booth7_resources/Call_of_Cthulhu.avif","resource/booth7_resources/IT.avif","resource/booth7_resources/Nang-Chada.jpg","resource/booth7_resources/Shaman.png","resource/booth7_resources/Teeyod.avif"];
const container = document.getElementById("random-book");

function RandomBook() {
    const old_book = document.getElementById("randombook");
    old_book.remove();

    const randomPath = all_books[Math.floor(Math.random() * all_books.length)];
    const new_book = document.createElement("img");
    new_book.id = "randombook";
    new_book.src = randomPath;
    container.appendChild(new_book);
}