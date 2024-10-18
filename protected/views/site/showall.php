<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - ';
$this->breadcrumbs=array(
	'showall',
);
?>
<style>
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #00008B !important;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
    

</style>
<h1>Showing the users used the interest calculator</h1>

<?php if(Yii::app()->user->hasFlash('testform')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('testform'); ?>
</div>

<?php else: ?>



<table>
    <thead>
        <tr>
            <th>Email</th>
            <th>Loan Amount</th>
            <th>Month to Repay</th>
            <th>Interest Percentage</th>
            <th>Monthly Due Payment</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo CHtml::encode($user['email']); ?></td> <!-- Use array syntax -->
                    <td><?php echo CHtml::encode($user['amount']); ?></td>
                    <td><?php echo CHtml::encode($user['month']); ?></td>
                    <td><?php echo CHtml::encode($user['interest']); ?></td>
                    <td><?php echo CHtml::encode($user['total_pay_amount']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No records found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<div class="pagination">
    <?php
    $this->widget('CLinkPager', array(
        'pages' => $pages,
    ));
    ?>
</div>



<?php endif; ?>















