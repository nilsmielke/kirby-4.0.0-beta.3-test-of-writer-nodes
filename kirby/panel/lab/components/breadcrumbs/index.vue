<template>
	<k-lab-examples>
		<k-lab-example label="Default">
			<k-breadcrumb :crumbs="crumbs" />
		</k-lab-example>
		<k-lab-example label="Too long">
			<k-breadcrumb :crumbs="tooLong" />
		</k-lab-example>
		<k-lab-example label="Icon">
			<k-breadcrumb
				:crumbs="[{ label: 'Sweet home', link: '/', icon: 'home' }, ...crumbs]"
			/>
		</k-lab-example>
	</k-lab-examples>
</template>

<script>
export default {
	computed: {
		crumbs() {
			return [
				{
					label: "Blog",
					link: "/blog"
				},
				{
					label: "Exploring the universe",
					link: "/blog/exploring-the-universe"
				}
			];
		},
		tooLong() {
			return [
				{
					label: "Our amazing blog",
					link: "/blog"
				},
				{
					label: "Exploring the universe from one end to the other",
					link: "/blog/exploring-the-universe"
				},
				{
					label: "some-super-long-filename-that-might-cause-problems.jpg",
					link: "/blog/exploring-the-universe/some-super-long-filename-that-might-cause-problems.jpg"
				}
			];
		}
	}
};
</script>
