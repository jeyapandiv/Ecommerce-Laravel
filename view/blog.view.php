<?php require "controller/blog.controller.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <header>
        <?php require "view/partials/nav.view.php"; ?>
    </header>

    <main>
        <div class="max-w-4xl mx-auto py-8">
            <h1 class="text-3xl font-bold mb-8">List of Blogs</h1>
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>

                        <tr>
                            <th class="px-4 py-2 bg-gray-200">Id</th>
                            <th class="px-4 py-2 bg-gray-200">Title</th>
                            <th class="px-4 py-2 bg-gray-200">Content</th>
                            <th class="px-4 py-2 bg-gray-200">Author Name</th>
                            <th class="px-4 py-2 bg-gray-200">Created At</th>
                            <th class="px-4 py-2 bg-gray-200">Status</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php
                        // iterating through the query result
                        if ($success_query) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr class='hover:bg-gray-100'>";
                                echo "<td class='border px-4 py-2'>" . $row['blog_id'] . "</td>";
                                echo "<td class='border px-4 py-2'>" . $row['blog_title'] . "</td>";
                                echo "<td class='border px-4 py-2'>" . $row['blog_content'] . "</td>";
                                echo "<td class='border px-4 py-2'>" . $row['author'] . "</td>";
                                echo "<td class='border px-4 py-2'>" . $row['created_at'] . "</td>";
                                echo "<td class='border px-4 py-2'>" . $row['status'] . "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="bg-gray-100 shadow">
        <?php require "view/partials/footer.view.php"; ?>
    </footer>

    <script>
        document.querySelector("#blogNav").style.color = "blue";
    </script>

</body>

</html>