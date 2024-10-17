import { spring } from 'svelte/motion';

export function scrollTo(node: HTMLElement, { offset = 0 } = {}) {
  const scroll = spring(0, {
    stiffness: 0.1,
    damping: 0.8,
  });

  const scrollToElement = () => {
    const elementPosition = node.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - offset;

    scroll.set(offsetPosition);
    window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
  };

  node.addEventListener('click', scrollToElement);

  return {
    destroy() {
      node.removeEventListener('click', scrollToElement);
    },
  };
}