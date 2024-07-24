<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style5.css" />
    <title>StudentPreneur Resource</title>
</head>
<body>
<?php include 'header.php';
    require('model/database.php');
    require('model/investor_db.php');
    require('model/funding_db.php');
    require('model/supplier_db.php');
    
    $investors = get_investors(3);
    $fundings = get_fundings(3);
    $suppliers = get_suppliers(3);
?>

<section id="app">
        <div class="investor">
            <h2>Featured Investor Profiles</h2>
            <?php foreach ($investors as $investor): ?>
                <div class="investor-profile" key="<?php echo $investor['id']; ?>">
                    <div class="card">
                        <div class="avatar"></div>
                        <p><?php echo htmlspecialchars($investor['name']); ?></p>
                        <p>Expert in <?php echo htmlspecialchars($investor['field']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="funding">
            <h2>Current Funding Opportunities</h2>
            <?php foreach ($fundings as $funding): ?>
                <div class="fundings-profile" key="<?php echo $funding['id']; ?>">
                    <div class="card">
                        <p>Funding Project:</p>
                        <p>Funding Amount: <?php echo htmlspecialchars($funding['amount']); ?></p>
                        <p>Investment Field: <?php echo htmlspecialchars($funding['field']); ?></p>
                        <p>Application Deadline: <?php echo htmlspecialchars($funding['deadline']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="supplier">
            <h2>Global Suppliers</h2>
            <?php foreach ($suppliers as $supplier): ?>
                <div class="supplier-profile" key="<?php echo $supplier['id']; ?>">
                    <div class="card">
                        <p>Supplier Name: <?php echo htmlspecialchars($supplier['name']); ?></p>
                        <p>Supplier Field: <?php echo htmlspecialchars($supplier['field']); ?></p>
                        <p>Supplier Country/Area: <?php echo htmlspecialchars($supplier['country']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>
