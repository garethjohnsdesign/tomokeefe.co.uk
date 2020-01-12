<?php

namespace venveo\bulkedit\elements\processors;

use craft\commerce\records\Product;
use craft\commerce\records\ProductType;
use craft\helpers\ArrayHelper;
use craft\records\FieldLayout;
use craft\web\User;
use venveo\bulkedit\base\AbstractElementTypeProcessor;
use venveo\bulkedit\Plugin;

class ProductProcessor extends AbstractElementTypeProcessor
{

    /**
     * Gets a unique list of field layouts from a list of element IDs
     * @param $elementIds
     * @return array
     */
    public static function getLayoutsFromElementIds($elementIds): array
    {
        // Get the category groups (there *should* only be one)
        $types = Product::find()
            ->select('typeId')
            ->distinct(true)
            ->limit(null)
            ->where(['IN', '[[id]]', $elementIds])
            ->asArray()
            ->all();
        $typeIds = ArrayHelper::getColumn($types, 'typeId');

        $layouts = ProductType::find()
            ->select('fieldLayoutId')
            ->where(['IN', '[[id]]', $typeIds])
            ->asArray()
            ->all();
        $layoutIds = ArrayHelper::getColumn($layouts, 'fieldLayoutId');

        $layouts = FieldLayout::find()->where(['in', 'id', $layoutIds])->all();

        return $layouts;
    }

    /**
     * The fully qualified class name for the element this processor works on
     * @return string
     */
    public static function getType(): string
    {
        return get_class(new \craft\commerce\elements\Product);
    }

    /**
     * Return whether a given user has permission to perform bulk edit actions on these elements
     * @param $elementIds
     * @param $user
     * @return bool
     */
    public static function hasPermission($elementIds, User $user): bool
    {
        return $user->checkPermission(Plugin::PERMISSION_BULKEDIT_PRODUCTS);
    }
}