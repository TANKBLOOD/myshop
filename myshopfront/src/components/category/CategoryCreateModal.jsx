import '../../styles/category/category-modal.css';

const CategoryCreateModal = ({openModalFlag}) => {
    
    return (
        <div id="myModal" className="modal">
            <div className="modal-content">
                <span className="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>
        </div>
    );
}
 
export default CategoryCreateModal;