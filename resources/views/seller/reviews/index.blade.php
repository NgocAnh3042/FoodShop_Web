<x-seller-layout title="Đánh giá khách hàng">
    <div class="p-space-lg max-w-7xl mx-auto w-full flex flex-col gap-space-lg">

        <x-seller.sections.reviews.header />
        <x-seller.sections.reviews.improvement-notice />

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
            <x-seller.sections.reviews.rating-score />
            <x-seller.sections.reviews.star-distribution />
            <x-seller.sections.reviews.criteria-scores />
        </div>

        <x-seller.sections.reviews.filter-bar />
        <x-seller.sections.reviews.review-feed />
        <x-seller.sections.reviews.pagination />

    </div>
</x-seller-layout>
